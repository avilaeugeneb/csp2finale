<?php
session_start();

require_once "./lib/payresource.php";
require_once "./lib/connect.php";
require_once "./lib/email_sending.php";

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

if(!isset($_GET['success'],$_GET['paymentId'],$_GET['PayerID'])){
    header("Location: ./catalog.php#mainnav");
}

if((bool)$_GET['success'] === false){
    header('Location: ./checkout.php#mainnav?paymentsuccess=false');
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];
$refnumber = $_GET['refnum'];

$payment = Payment::get($paymentId,$paypal);

$execute = new PaymentExecution();
$execute->setPayerId($payerId);

try{
    $result = $payment->execute($execute,$paypal);

    if($result){
        $cartuser = $_SESSION['user'];
        $user_qry = "SELECT id FROM users WHERE userUid='$cartuser'";
        $result_user = mysqli_query($conn,$user_qry);
        $user = mysqli_fetch_assoc($result_user); 
        
        $userid = $user['id'];
        $newcart = $_SESSION['cart'];

        $cart_qry = "INSERT 
        INTO carts(cartUser,cartRefNum) 
        VALUES('$userid','$refnumber')";
        $result_cart = mysqli_query($conn,$cart_qry);

        $cartcount_qry = "SELECT id FROM carts ORDER BY id DESC LIMIT 1";
        $result_cartcount = mysqli_query($conn,$cartcount_qry);
        $cartcount = mysqli_fetch_assoc($result_cartcount);

        $cartnum = $cartcount['id'];

        
        foreach($newcart as $itemid => $quantity){
            $cartitems_qry = "INSERT 
            INTO cartproducts(cartID,cartItem,cartQty)
            VALUES('$cartnum','$itemid','$quantity')";
            $result_cartitems = mysqli_query($conn,$cartitems_qry);
        }


        // Query for sending email 
        $user_infoqry = "SELECT CONCAT(userFirstName,' ',userLastName) as name,
        userEmail FROM users WHERE userUid='$cartuser'";
        $result_userinfo = mysqli_query($conn,$user_infoqry);
        $userinfo = mysqli_fetch_assoc($result_userinfo);

        $username = $userinfo['name'];
        $usermail = $userinfo['userEmail'];
        $mail_subject = "Pure Food Order#".$refnumber;
        $mail_body = "<p>Thanks for placing an order. Your order is being processed with referrence number ".$refnumber."</p><p>Expect the delivery within 60 to 90 mins</p>";

        sendMail($usermail,$username,$mail_subject,$mail_body);

        unset($_SESSION['cart']);
        unset($_SESSION['subtotal']);
        unset($_SESSION['total_amount']);
        header('Location: ./ordersuccess.php?refid='.$refnumber);    
    }
} catch(Exception $e){
    $data = json_decode($e->getData());
    echo $data->message;
}


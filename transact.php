<?php
session_start();
require "./lib/payresource.php";
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

if(!isset($_GET['success'],$_GET['paymentId'],$_GET['PayerID'])){
    header("Location: ./catalog.php");
}

if((bool)$_GET['success'] === false){
    header('Location: ./checkout.php');
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId,$paypal);

$execute = new PaymentExecution();
$execute->setPayerId($payerId);

try{
    $result = $payment->execute($execute,$paypal);

    if($result){
        unset($_SESSION['cart']);
        unset($_SESSION['subtotal']);
        unset($_SESSION['total_amount']);
        header('Location: ./catalog.php?paymentsuccess=true');    
    }
} catch(Exception $e){
    $data = json_decode($e->getData());
    echo $data->message;
}


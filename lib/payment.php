<?php
session_start();
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

function tofloat($num) {
    $dotPos = strrpos($num, '.');
    $commaPos = strrpos($num, ',');
    $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos : 
        ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
   
    if (!$sep) {
        return floatval(preg_replace("/[^0-9]/", "", $num));
    } 

    return floatval(
        preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
        preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
    );
}

require 'payresource.php';
require_once 'refnumgen.php';
require_once 'connect.php';

if(!isset($_POST['product'],$_POST['price'])){
    die();
}

// $product = $_POST['product'];
// $price = floatval($_POST['price']);
$shipping = 0.00;

// $total = $price + $shipping;
$total = tofloat($_SESSION['total_amount']);


$payer = new Payer();
$payer->setPaymentMethod('paypal');

// Session Cart into Items
$cart = $_SESSION['cart'];
$indexarrays = array_keys($cart); //gets all indexes of session cart
$strarray = implode("','",$indexarrays); //return string of array 
$products_qry = "SELECT * FROM products WHERE id IN('".$strarray."') ORDER BY pName";
$result_products = mysqli_query($conn,$products_qry);

$items = array(); 

while($products = mysqli_fetch_assoc($result_products)):
    extract($products);
    $item = new Item();
    $item->setName($pName)
        ->setCurrency('PHP')
        ->setQuantity($cart[$id])
        ->setPrice($pPrice);
    $items[]=$item;
endwhile;

$itemList = new ItemList();
$itemList->setItems($items);


$details = new Details();
$details->setShipping($shipping)
    ->setSubtotal($total);

$amount = new Amount();
$amount->setCurrency('PHP')
    ->setTotal($total)
    ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription('Pay for Grocery Items')
    ->setInvoiceNumber($refnumber);

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL.'/transact.php?success=true&refnum='.$refnumber)
    ->setCancelUrl(SITE_URL.'/transact.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));

try {
    $payment->create($paypal);
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
    die($ex->getData());
}

$approvalUrl = $payment->getApprovalLink();

header("Location:".$approvalUrl);
<?php
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'payresource.php';

if(!isset($_POST['product'],$_POST['price'])){
    die();
}

$product = $_POST['product'];
$price = floatval($_POST['price']);
$shipping = 0.00;

$total = $price + $shipping;


$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
    ->setCurrency('PHP')
    ->setQuantity(1)
    ->setPrice($price);

$itemList = new ItemList();
$itemList->setItems(array($item));


$details = new Details();
$details->setShipping($shipping)
    ->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('PHP')
    ->setTotal($total)
    ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription('Pay for Grocery Items')
    ->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL.'/transact.php?success=true')
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
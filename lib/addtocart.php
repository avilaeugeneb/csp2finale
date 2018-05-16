<?php
session_start();
require_once 'connect.php';

$productID = $_POST['pid'];
$quantity = $_POST['quantity'];

$product_query = "SELECT * FROM products WHERE id=$productID";

$result_products = mysqli_query($conn,$product_query);

$productinfo = mysqli_fetch_assoc($result_products);

$_SESSION['cart'][$productinfo['id']] = $quantity;
$_SESSION['subtotal'][$productinfo['id']] = $quantity * $productinfo['pPrice'];

$_SESSION['total_amount'] = array_sum($_SESSION['subtotal']);

echo "(₱".$_SESSION['total_amount'].")";


mysqli_close($conn);

<?php
session_start();
require_once 'connect.php';

$productID = $_POST['pid'];
$quantity = $_POST['quantity'];

$product_query = "SELECT * FROM products WHERE id=$productID";

$result_products = mysqli_query($conn,$product_query);

$productinfo = mysqli_fetch_assoc($result_products);

$_SESSION['cart'][$productinfo['id']] = $quantity * $productinfo['pPrice'];

$_SESSION['item_count'] = array_sum($_SESSION['cart']);

echo "(₱".$_SESSION['item_count'].")";


mysqli_close($conn);

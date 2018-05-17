<?php 
session_start();
echo "This is Session Cart";
echo "<hr>";
var_dump($_SESSION['cart']);

echo "<br>";
echo "<br>";
echo "This is Item IDs array";
echo "<hr>";

$itemid_array = (array_keys($_SESSION['cart']));
var_dump($itemid_array);

echo "<br>";
echo "<br>";
echo "This is Quantities array";
echo "<hr>";

$quantity_array = (array_values($_SESSION['cart']));
var_dump($quantity_array);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

 

// $newCart = new stdClass();
// $newCart->itemids = $itemid_array;
// $newCart->quantities = $quantity_array;

// var_dump($newCart);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<hr>";
// var_dump($newCart->itemids);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<hr>";
// var_dump($newCart->quantities);


// var_dump(array_sum($_SESSION['cart']));

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<hr>";

// var_dump(array_sum($_SESSION['cart']));



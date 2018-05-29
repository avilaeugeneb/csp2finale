<?php
require_once '../../lib/connect.php';
$itemid = $_POST['itemid'];

$item_qry = "DELETE FROM products WHERE id=$itemid";

$delete_qry = mysqli_query($conn,$item_qry);

if($delete_qry){
	echo "Item Successfully Deleted!";
}else{
	echo "This item is in some users' cart";
}
<?php
require_once '../../lib/connect.php';

$pName = $_POST['pName'];
$pDesc = $_POST['pDesc'];
$pStocks = $_POST['pStocks'];
$pPrice = $_POST['pPrice'];
$id = $_POST['id'];

$edit_qry ="UPDATE products SET pName='$pName', pDesc='$pDesc', pStocks=$pStocks, pPrice=$pPrice WHERE id=$id";
$result_edit = mysqli_query($conn,$edit_qry);

if($result_edit)
	echo "You edited an item successfully!";
else
	echo "Something went wrong: ".mysqli_error($conn);

mysqli_close($conn);
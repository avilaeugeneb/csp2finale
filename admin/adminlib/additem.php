<?php
require_once '../../lib/connect.php';

$pName = $_POST['pName'];
$pDesc = $_POST['pDesc'];
$pImage = $_POST['pImage'];
$pStocks = $_POST['pStocks'];
$pPrice = $_POST['pPrice'];
$pCategoryID = $_POST['pCategoryID'];

$p_qry = "INSERT INTO products(pName,pDesc,pImage,pStocks,pPrice,pCategoryID)
VALUES('$pName','$pDesc','$pImage','$pStocks','$pPrice','$pCategoryID')";

$result_pqry = mysqli_query($conn,$p_qry);

echo "Successfully updated";
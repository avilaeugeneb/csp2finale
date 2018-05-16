<?php

session_start();
$orderParameter = $_POST['orderparam'];

$orderBy = $_SESSION['product_qry']." ORDER BY $orderParameter";

$_SESSION['newproduct_qry'] = $orderBy;

echo $_SESSION['newproduct_qry'];
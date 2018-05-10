<?php
require_once 'connect.php';
session_start();
$user = $_SESSION['user'];
$deactivate_qry = "UPDATE users SET userStatus=2 WHERE userUid ='$user'";

$result_deact = mysqli_query($conn,$deactivate_qry);

session_unset();
session_destroy();

header('location: ../login.php');

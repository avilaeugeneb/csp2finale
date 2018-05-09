<?php
session_start();
require_once 'connect.php';

$loginuser = mysqli_real_escape_string($conn,htmlspecialchars($_POST['loginuser']));
$loginpass = sha1(mysqli_real_escape_string($conn,htmlspecialchars($_POST['loginpassword'])));

$login_qry = "SELECT * FROM users WHERE userUid='$loginuser' AND userPassword='$loginpass'";

$loginresult = mysqli_query($conn, $login_qry);

if(mysqli_num_rows($loginresult)>0){
	$_SESSION['user'] = $loginuser;
	header("location: ../home.php");
}

mysqli_close($conn);


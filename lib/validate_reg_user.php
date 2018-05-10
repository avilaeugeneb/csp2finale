<?php

require_once 'connect.php';

$reguser = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
$userregex = '/^[a-z\d_]{5,20}$/i';

if(!preg_match($userregex, $reguser)){
	echo "Username invalid";
	die;
}

$reguser_qry = "SELECT * FROM users WHERE userUid='$reguser'";

$reguser_result = mysqli_query($conn,$reguser_qry);

if(mysqli_num_rows($reguser_result)==0){
	echo " ";
}else{
	echo "Username already taken";
}

mysqli_close($conn);
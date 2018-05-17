<?php
session_start();
require_once 'connect.php';

$loginuser = mysqli_real_escape_string($conn,htmlspecialchars($_POST['loginuser']));
$loginpass = sha1(mysqli_real_escape_string($conn,htmlspecialchars($_POST['loginpassword'])));

$login_qry = "SELECT * FROM users WHERE userUid='$loginuser' AND userPassword='$loginpass'";

$loginresult = mysqli_query($conn, $login_qry);

if(mysqli_num_rows($loginresult)>0){

	while($row = mysqli_fetch_assoc($loginresult)){
		if($row['userStatus'] == 2){
			$_SESSION['errormessage'] = "Your account is deactivated";
			header('location: ../login.php?accountdeactivated');
		}
		else{
			if(isset($_SESSION['cart'])){
				$_SESSION['user'] = $loginuser;
				header("location: ../checkout.php");
			}
			else{
				$_SESSION['user'] = $loginuser;
				header("location: ../profile.php");
			}
			
		}
	}
	
}
else{
	$_SESSION['errormessage'] = 'Not yet a user? <a href="register.php">Register</a>';
	die (header("location: ../login.php?invalidcredentials=true"));
}

mysqli_close($conn);
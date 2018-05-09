<?php

require_once 'connect.php';

$regemail = mysqli_real_escape_string($conn,htmlspecialchars($_POST['usermail']));

$regemail_qry = "SELECT * FROM users WHERE userEmail='$regemail'";

$regemail_result = mysqli_query($conn,$regemail_qry);

if(mysqli_num_rows($regemail_result)==0){
	echo " ";
}else{
	echo "Email address already registered";
}

mysqli_close($conn);
<?php

require_once 'connect.php';

$username = $_POST['username'];
$usermail =$_POST['usermail'];
$password = sha1($_POST['userpassword']);

$register_qry = "INSERT INTO users(userUid,userEmail,userPassword) VALUES('$username','$usermail','$password')";

$result = mysqli_query($conn,$register_qry);

mysqli_close($conn);

header("location: ../login.php");
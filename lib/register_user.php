<?php

require_once 'connect.php';
require_once 'email_sending.php';

$username  = mysqli_escape_string($conn,htmlspecialchars($_POST['username']));
$usermail  = mysqli_escape_string($conn,htmlspecialchars($_POST['usermail']));
$password = sha1($_POST['userpassword']);

$register_qry = "INSERT INTO users(userUid,userEmail,userPassword) VALUES('$username','$usermail','$password')";

$result = mysqli_query($conn,$register_qry);

mysqli_close($conn);

$mail_subject = "Registration Successful";
$mail_body = "<p>Thanks for registering, ".$username."</p><p>Experience hassle-free buying grocery items online with Pure Food.</p>";

sendMail($usermail,$username,$mail_subject,$mail_body);


header("location: ../login.php");
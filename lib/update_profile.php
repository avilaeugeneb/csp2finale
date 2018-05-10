<?php
require_once 'connect.php';

$upFirstName = mysqli_real_escape_string($conn,htmlspecialchars($_POST['firstName']));
$upLastName = mysqli_real_escape_string($conn,htmlspecialchars($_POST['lastName']));
$upEmail = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));
$upCity = mysqli_real_escape_string($conn,htmlspecialchars($_POST['city']));
$upId = $_POST['userid'];

$update_qry = "UPDATE users 
SET userFirstName='$upFirstName', userLastName='$upLastName', userEmail='$upEmail', userCity='$upCity'
WHERE id = '$upId'";

$update_result = mysqli_query($conn,$update_qry);

echo "Updated Successfully";

mysqli_close($conn);
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=EDGE">
    <title>
        <?php 
            get_title();
        ?>
    </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../assets/css/bootstrap/mdb.min.css" rel="stylesheet">
     <!-- datables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
     <!-- Your custom styles -->
    <link href="adminassets/css/adminstyle.css" rel="stylesheet">
</head>

<body>
<?php
    session_start(); 
    require_once '../lib/connect.php';
    $username = $_SESSION['user'];

    $userinfo_qry = "SELECT userRole FROM users WHERE userUid = '$username'";
    $result_userinfo = mysqli_query($conn,$userinfo_qry);
    $userinfo = mysqli_fetch_assoc($result_userinfo);

    if($userinfo['userRole']==2)
        echo '<script>window.location.href="../index.php"</script>';

?>

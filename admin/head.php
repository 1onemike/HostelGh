<?php
session_start();
ob_start();
include '../includes/connectdb.php';

include '../includes/core.php'; 


if (isset($_SESSION['admin'])){

}else
{
  header("Location: ../admin-login.php");
}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hostel Admin</title>


      <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.jpg" type="image/x-icon">   
    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

  

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../css/jquery.fancybox.css" type="text/css" media="screen" /> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



    <![endif]-->

 
 

</head>
<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!-- favicon -->
    <link rel="icon" sizes="180x180" href="images/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000000">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Icons -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/icons.css">
    <!-- Main css File -->
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Other css Files -->
    <link rel="stylesheet" href="css/sweetalert.css">
</head>
<body class="crypt-dark">
    <header>
    <div class="crypt-header">
        <div class="container-fluid crypt-container">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12">
                    <div class="row">
                        <div class="crypt-logo"><a href="/"><img src="images/logo.png" style="height: 45px;top: 5px;"></a></div>
                    </div>
                </div>
                <i class="menu-toggle fas fa-bars d-xs-block d-sm-block d-md-none"></i>
                <div class="mobile-menu col-xl-11 col-lg-11 col-md-11 d-none d-md-block d-lg-block">
                    <ul class="crypt-heading-menu float-left">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="buysell.php">buy-sell</a></li>
                        <li><a href="contact-us.php">contact us</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    <ul class="crypt-heading-menu float-right">
                        <li class="crypt-box-menu"><a href="wallet.php">Wallet</a></li>
                        <li class="crypt-box-menu"><a href="profile.php">
                            <button>Profile</button>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

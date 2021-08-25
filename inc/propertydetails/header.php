<?php include('config/config.php'); ?>
<?php include('lib/Database.php'); ?>
<?php
    $db = new Database();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
    <title>Property Details</title>
</head>
<body style="background-color: #F5F6F7;">
    <header>
        <!-- second header -->
        <section class="second-header">
            <!-- navbar start -->
            <nav class="container">
                <div class="second-nav-main">
                    <div class="navchild1">
                    <a href="index.php"><img src="images/logo.png" alt="sitelogo"></a>
                    </div>
                    <div class="navchild2">
                        <div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a id="active" href="property.php">Property</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="second-navchild3">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="second-navchild4" id="navchild4">
                        <a href="submit.php"><span>Submit Ads</span></a>
                        <i class="fas fa-plus" id="fa-plus"></i>
                    </div>
                    <div class="seocnd-navchild5" id="navchild5"><!-- for display 768px -->
                            <div class="top" id="navchild5-top"></div>
                            <div class="middle" id="navchild5-middle"></div>
                            <div class="bottom" id="navchild5-bottom"></div>
                    </div>
                </div>
                <div class="dropdown second-dropdown">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a id="active" href="property.php">Property</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
             <!-- navbar end -->
        </section>
        <!-- banner section start -->
        <div class="propertydetails-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Property Details</h1>
                <p> <a href="propertydetails.php">Home</a>  > Property Details</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>
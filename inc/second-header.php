<?php include('lib/Database.php'); ?>
<?php include('helpers/format.php'); ?>
<?php include 'classes/User.php' ?>
<?php
    spl_autoload_register(function($class){
        include_once "classes/".$class.".php";
    });
?>
<?php
    $db = new Database();
    $fm = new Format();
    $us = new User();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
    <title><?php echo $fm ->title(); ?> - <?php echo title; ?></title>
</head>
<body style="background: #F5F6F7;">
    <header> 
            <!-- second header -->
            <section class="second-header">
                <!-- navbar start -->
                <nav class="container">
                    <div class="second-nav-main">
                        <div class="navchild1">
                        <a class="pc-logo" href="index.php"><img src="images/logo.png" alt="sitelogo"></a>
                        <a class="mobile-logo" href="index.php"><img src="images/mobile-logo.png" alt="sitelogo"></a>
                        </div>
                        <div class="navchild2">
                            <div>
                                <?php
                                    $path = $_SERVER['SCRIPT_FILENAME'];
                                    $currentpage = basename($path, '.php');
                                ?>
                                <ul>
                                    <li>
                                        <a <?php if($currentpage == 'index'){echo 'id="active"';} ?> href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a <?php if($currentpage == 'property'){echo 'id="active"';} ?> href="property.php">Property</a>
                                    </li>
                                    <li>
                                        <a <?php if($currentpage == 'about'){echo 'id="active"';} ?> href="about.php">About</a>
                                    </li>
                                    <li>
                                        <a <?php if($currentpage == 'contact'){echo 'id="active"';} ?> id="contact" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="second-navchild3">
                            <i class="fas fa-search openBtn nav-search" onclick="openSearch()"></i>
                            <div id="myOverlay" class="overlay">
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                <div class="overlay-content">
                                    <form action="">
                                        <input type="text" placeholder="Search.." name="search">
                                        <button type="submit"><i class="fa fa-search overlay-search"></i></button>
                                    </form>
                                </div>
                            </div>
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
                                    <li>
                                        <a <?php if($currentpage == 'index'){echo 'id="active"';} ?> href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a <?php if($currentpage == 'property'){echo 'id="active"';} ?> href="property.php">Property</a>
                                    </li>
                                    <li>
                                        <a <?php if($currentpage == 'about'){echo 'id="active"';} ?> href="about.php">About</a>
                                    </li>
                                    <li>
                                        <a <?php if($currentpage == 'contact'){echo 'id="active"';} ?> id="contact" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                </div>
            </nav>
             <!-- navbar end -->
            </section>

            <!-- active menu js -->
<?php 
    include '../lib/Session.php';
    Session::checkSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- favicon -->
    <link rel="icon" href="images/mobile-logo.png" type="image/gif" sizes="16x16">
    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">

    <title>admin home</title>
    <style>
        #down{
    display: none;
}
    </style>
</head>
<body>
    <!-- left content start-->
    <div class="displayleft-structure">
            <!--admin nav start -->
        <div class="nav-container">
            <img src="images/logo.png" alt="notunghor logo" width="100%">
            <div style="margin: 50px;"></div>
            <ul>
                <li class="active">
                    <i class="fas fa-tachometer-alt active-icon"></i>
                    <a href="index.php" class="active" id="dashboard">Dashboard</a>
                </li>
                <li>
                    <i class="far fa-user-circle nav-icon active-icon"></i>
                    <a href="profile.php" class="lista">Profile</a>
                </li>
                <li class="active" id="main-li">
                    <i class="fa fa-sitemap active-icon"></i>
                    <a href="siteoptions.php" class="active">Site Options</a>
                    <i class="fas fa-arrow-circle-down sub-menu-icon" id="sub-menu-icon-down"></i>
                    <i class="fas fa-arrow-circle-up sub-menu-icon" id="sub-menu-icon-up"></i>
                    <div class="sub-menu" id="dropdown">
                        <ul>
                            <li><a href="logo.php" id="logo">Logo</a></li>
                            <li><a href="title.php" id="title">Title</a></li>
                            <li><a href="socialmedia.php" id="socialmedia">Social Media</a></li>
                            <li><a href="copyright.php" id="copyright">Copyright</a></li>
                        </ul>
                    </div>
                        
                </li>
                <li>
                    <i class="fas fa-lock nav-icon active-icon" class="lista"></i>
                    <a href="changepassword.php">Change Password</a>
                </li>
                <li>
                    <i class="far fa-envelope nav-icon active-icon"></i>
                    <a href="inbox.php" class="lista">Inbox</a>
                </li>
                <li>
                    <?php
                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                            Session::destroy();
                        }
                    ?>
                    <i class="fas fa-sign-out-alt nav-icon active-icon"></i>
                    <a href="?action=logout" class="lista">Signout</a>
                </li>
            </ul>
        </div>
        <!--admin nav end -->
    </div>
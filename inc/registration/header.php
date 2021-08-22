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
    <title>registration</title>
</head>
<body>
    <header> 
            <!-- second header -->
            <section class="second-header">
                <!-- navbar start -->
                <nav class="container">
                    <div class="second-nav-main">
                        <div class="navchild1">
                            <img src="images/logo.png" alt="sitelogo">
                        </div>
                        <div class="navchild2">
                            <div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="property.php">Property</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
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
                    </div>
                </nav>
                 <!-- navbar end -->
            </section>
            <!-- banner section start -->
                <div class="registration-banner banner">
                    <div class="banner-overlay">
                        <h1 class="banner-header">Sign Up</h1>
                        <p> <a href="#">Home</a>  > Signup</p>
                    </div>
                </div>
            <!-- banner section end -->
    </header>

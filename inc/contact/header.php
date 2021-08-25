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
    <title>contact</title>
    <style>
.contact-inputfeild{
    margin: 10px 0px;
    position: relative;
}
.contact-inputfeild input[type=text] {
    display: block;
    width: 100%;
    padding: 20px 27px;
    font-size: 18px;
    box-shadow: 1px 1px 1px 1px #0080007a;
    border: 0;
}
.contact-inputfeild textarea{
    padding: 20px 27px;
    width: 100%;
    font-size: 18px;
    box-shadow: 1px 1px 1px 1px #0080007a;
    border: 0;
}
.contact-inputfeild label{
    position: absolute;
    top:50%;
    left: 50px;
    transform: translate(-50%,-50%);
    transition: all 0.3s;
    pointer-events: none;
    color: #999;
}
input:focus ~ label, input:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: 27%;
    left: 8%;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}
.textarea label{
    position: absolute;
    top:30px;
    left: 60px;
    transform: translate(-50%,-50%);
    transition: all 0.3s;
    pointer-events: none;
    color: #999;
}
textarea:focus ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: 15px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}
</style>
</head>
<body>
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
                                <li><a href="property.php">Property</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a id="active" href="contact.php">Contact</a></li>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="property.php">Property</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a id="active" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
             <!-- navbar end -->
        </section>
        <!-- banner section start -->
        <div class="contact-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Contact</h1>
                <p> <a href="#">Home</a>  > Contact</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>

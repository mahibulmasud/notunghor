<?php 
    // ob_start();
    include('lib/Session.php');
    Session::init();
    include('lib/Database.php'); 
    include('helpers/format.php');
    include_once('classes/User.php');
    
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
    <!-- favicon -->
    <link rel="icon" href="images/mobile-logo.png" type="image/gif" sizes="16x16">
   <!-- font-awesome offline link -->
   <link rel="stylesheet" href="css/fontawesomeCss/all.css">
    <link rel="stylesheet" href="css/fontawesomeCss/all.min.css">
    <link rel="stylesheet" href="css/fontawesomeCss/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesomeCss/fontawesome.min.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
    <!-- animation css cdn link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <header> 
        <section class="header-background">
                    <!-- top header -->
        <div class="top-header-main container">
            <div class="top1">
                <table>
                    <tr>
                        <td><i class="fas fa-phone-volume"></i></td>
                        <td style="padding-left: 5px;">01980573501</td>
                        <td class="small-device"><i class="fas fa-envelope"></i></td>
                        <td class="small-device" style="padding-left: 5px;">masudur15-1743@diu.edu.bd</td>
                    </tr>
                </table>
            </div>


<?php
    if (isset($_GET['uid'])){
        Session::destroy();
    }
?>

            <div class="top2">
                <?php 
                    $login = Session::get("userlogin");
                    if ($login == false) {
                       ?>
                    <a href="registration.php" class="registration">Register</a>
                    <a href="login.php" class="login">Login</a>
                       <?php
                    }else{
                        ?>
                        <a href="?uid=<?php Session::get('uid'); ?>" class="login">Logout</a>
                        <?php
                    }
                ?>
                
            </div>
            <div class="top3">
                <table>
                    <tr>
                        <td><i class="fab fa-facebook-f"></i></td>
                        <td><i class="fab fa-twitter"></i></td>
                        <td><i class="fab fa-instagram"></i></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- navbar start -->
        <nav class="container">
            <div class="nav-main">
                <div class="navchild1">
                    <a href="index.php"><img src="images/logo.png" alt="sitelogo"></a>
                </div>
                <div class="navchild2">
                    <div>
                        <ul>
                            <li><a id="active" href="#">Home</a></li>
                            <li><a href="property.php">Property</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navchild3">
                        <?php 
                            $login = Session::get("userlogin");
                            if ($login == false) {
                            ?>
                            <i class="far fa-user-circle user-usericon"></i>
                            <p style="font-size:12px">username</p>
                            <?php
                            }else{
                                ?>
                                 <?php
                                        $id =  Session::get("uid");
                                        $getdata = $us->getUserData($id);
                                        if ($getdata) {
                                            while($result = $getdata->fetch_assoc()){

                                    ?>
                                    <a href="profile.php"> <abbr title="profile">
                                    <img src="<?php echo $result['userImage']; ?>" width="40px" height="40px" style="border-radius:50%" alt="">
                                    </abbr></a>

                                    <?php } } ?>
                                    <p style="font-size:12px"><?php echo Session::get('userUsername'); ?></p>
                                <?php
                            }
                        ?>
                    <a href="submit.php"><i class="fas fa-plus" id="fa-plus"></i></a>
                </div>
                <div class="navchild4" id="navchild4">
                    
                    <a href="submit.php">
                            <span>Submit Ads</span>
                    </a>
                </div>
                <div class="navchild5" id="navchild5">
                    <div class="top" id="navchild5-top"></div>
                    <div class="middle" id="navchild5-middle"></div>
                    <div class="bottom" id="navchild5-bottom"></div>
                </div>
            </div>
            <div class="dropdown">
                <ul>
                    <li><a id="active" href="index.php">Home</a></li>
                    <li><a href="property.php">Property</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
         <!-- navbar end -->
        </section>
        <!-- banner overlay start -->
            <div class="banner-overly">
                <p id="p">Lorem ipsum dolor sit amet, consecteLorem ipsum dolor sit amet,</p>
                <div class="line"></div>
                <h1>The Best Way To Find Your Perfect Home</h1>
            </div>
        <!-- banner overlay end -->
    </header>
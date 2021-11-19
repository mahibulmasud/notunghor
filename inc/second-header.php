<?php 
    ob_start();
    
    // Session::init();
    session_start();
    include('lib/Session.php');
    include('lib/Database.php'); 
    include('helpers/format.php');
    include_once('classes/User.php');
    include_once('classes/Addpost.php');
    include_once('classes/Contact.php');
    include_once ('classes/SiteOption.php');

 ?>
<?php
    // spl_autoload_register(function($class){
    //     include_once "classes/".$class.".php";
    // });
?>
<?php
    $db = new Database();
    $fm = new Format();
    $us = new User();
    $addp = new Addpost();
    $con = new Contact();
    $so = new SiteOption();
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
   <link rel="stylesheet" href="css/font.css">
   <!-- ajax link -->
   <script src="js/jquery.min.js"></script>
   <script src="js/function.js"></script>
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
                                <div class="logo-for-desktop-div">
                                <a href="index.php">                       
                                    <?php
                                            $query = "SELECT * FROM tbl_siteoption";
                                            $post = $db->select($query);
                                            if($post){
                                                    while($result = $post->fetch_assoc()){
                                        ?>
                
                                        <img src="admin/<?php echo $result['logo']; ?>" alt="sitelogo">
                                        <?php
                                            }
                                        }
                                        ?>
                                </a>
                            </div>
                            <div class="mobile-logo-div">
                                <a href="index.php">                       
                                    <?php
                                            $query = "SELECT * FROM tbl_siteoption";
                                            $post = $db->select($query);
                                            if($post){
                                                    while($result = $post->fetch_assoc()){
                                        ?>
                
                                        <img class="mobile-logo" src="admin/<?php echo $result['mobilelogo']; ?>" alt="sitelogo">
                                        <?php
                                            }
                                        }
                                        ?>
                                </a>
                            </div>
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
                        <?php 
                            $login = Session::get("userlogin");
                            if ($login == false) {
                            ?>
                            <a href="login.php"><abbr title="profile">
                                <i class="far fa-user-circle user-usericon"></i>
                                </abbr></a>
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
                                    <img src="<?php echo $result['userImage']; ?>" width="40px" height="40px" style="border-radius:50%;object-fit: cover;" alt="">
                                    </abbr></a>

                                    <?php } } ?>


                                    <p style="font-size:12px"><?php echo Session::get('userUsername'); ?></p>
                                <?php
                            }
                        ?>
                            

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
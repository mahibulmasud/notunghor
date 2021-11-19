<?php 
    include '../lib/Session.php';
    Session::checkSession();
    include('../lib/Database.php'); 
    include('../helpers/format.php');
    include_once ('../classes/SiteOption.php');
    include_once ('../classes/SiteSocial.php');
    include_once ('../classes/Changepassword.php');
?>
<?php
    $db = new Database();
    $fm = new Format();
    $so = new SiteOption();
    $ss = new SiteSocial();
    $cp = new Changepassword();
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
            <a href="../index.php" target="_blank">
            <?php
            $query = "SELECT * FROM tbl_siteoption";
            $post = $db->Select($query);
            if($post){
                while($result = $post->fetch_assoc()){
            ?>
            <img src="<?php echo $result['logo'] ?>" alt="notunghor logo" width="260px">

            <?php }} ?>

            </a>
            <div style="margin: 50px;"></div>

                                <?php
                                    $path = $_SERVER['SCRIPT_FILENAME'];
                                    $currentpage = basename($path, '.php');
                                ?>

            <ul>
                <li>
                <a <?php if($currentpage == 'index'){echo 'class="active"';} ?> href="index.php">
                    <i class="fas fa-tachometer-alt active-icon"></i>Dashboard
                </a>
                </li>
                <li>
                    <a <?php if($currentpage == 'profile'){echo 'class="active"';} ?> href="profile.php">
                        <i class="far fa-user-circle active-icon"></i>Profile
                    </a>
                </li>
                <li>

                    <a <?php if($currentpage == 'siteoptions'){echo 'class="active"';} ?> href="siteoptions.php">
                    <i class="fas fa-sitemap active-icon" ></i>Site Options
                    </a>
                        <i class="fas fa-arrow-circle-down sub-menu-icon1" id="sub-menu-icon-down"></i>
                        <i class="fas fa-arrow-circle-up sub-menu-icon2" id="sub-menu-icon-up"></i>
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
                    <a <?php if($currentpage == 'changepassword'){echo 'class="active"';} ?> href="changepassword.php">
                        <i class="fas fa-lock active-icon" ></i>Change Password
                    </a>
                </li>
                <li>
                    <a <?php if($currentpage == 'inbox'){echo 'class="active"';} ?> href="inbox.php">
                    <i class="far fa-envelope active-icon"></i>Inbox

                    <!-- inbox php -->
                    <?php
                        $query = "SELECT * FROM tbl_contact WHERE status='0'";
                        $msg = $db->select($query);
                        if($msg){
                            $count = mysqli_num_rows($msg);
                            echo "(".$count.")";
                        }else{
                            echo "(0)";
                        }
                ?>
                    <!-- inbox php -->


                    </a>
                </li>

    








                <li>
                    <?php
                        if (isset($_GET['action']) && $_GET['action'] == "logout") {
                            Session::destroy();
                        }
                    ?>
                    
                    <a href="?action=logout" ><i class="fas fa-sign-out-alt nav-icon active-icon"></i>Signout</a>
                </li>
            </ul>
        </div>
        <!--admin nav end -->
    </div>
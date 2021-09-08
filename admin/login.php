<?php include '../classes/Adminlogin.php' ?>
<?php
    $al = new Adminlogin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminUser = $_POST['adminUser'];
        $adminPass = md5($_POST['adminPass']);

        $loginChk = $al->adminLogin($adminUser, $adminPass);
    }   
?>


<link rel="stylesheet" href="css/login.css">
<link
      
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    /> 
    <div class="login-main">
    <img src="images/mobile-logo.png" width="100px" alt="">
        <div class="contact">
            <div class="text">
                Admin Login Form
                <p style="font-size:15px; color:red;">
                    <?php
                        if (isset($loginChk)) {
                            echo $loginChk;
                        }
                    ?>
                </p>
            </div>

            <form action="login.php" method="POST">
                <div class="fild">
                    <input type="text" placeholder="Username" name="adminUser">
                    <span class="fa fa-user"></span>
                    <label>Username</label>
                </div>

                <div class="fild">
                    <input type="password" placeholder="password" name="adminPass">
                    <span class="fa fa-lock"></span>
                    <label>Password</label>
                </div>

                <div class="forget-pass">
                <a href="#">Forget password</a>
                </div>

                <button>Sign in</button>

                <!-- <div class="signup">
                Not a member?
                <a href="#">Sign up now</a>
                </div> -->
            </form>
        </div>
    </div>
    
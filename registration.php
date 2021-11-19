<!-- registration header -->
<?php include('inc/second-header.php')?>
 <!-- banner section start -->
 <div class="registration-banner banner">
                    <div class="banner-overlay">
                        <h1 class="banner-header">Sign Up</h1>
                        <p> <a href="#">Home</a>  > Signup</p>
                        <p> or<a href="login.php"> SignIn</a>   </p>
                    </div>
                </div>
            <!-- banner section end -->
    </header>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
            $userReg = $us->userRegistration($_POST, $_FILES);
        }
    ?>
<!-- registration header -->
        <!-- main -->
        <div class="main-div">
            <!-- <div class="clip-one">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#061539" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,160C240,149,300,107,360,80C420,53,480,43,540,32C600,21,660,11,720,48C780,85,840,171,900,176C960,181,1020,107,1080,117.3C1140,128,1200,224,1260,229.3C1320,235,1380,149,1410,106.7L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
            </div>
            <div class="clip-two">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#061539" fill-opacity="1" d="M0,96L30,80C60,64,120,32,180,53.3C240,75,300,149,360,202.7C420,256,480,288,540,282.7C600,277,660,235,720,229.3C780,224,840,256,900,229.3C960,203,1020,117,1080,90.7C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
            </div> -->
            <div class="layout-main">
            <div class="part-one">
                <div>
                    <div class="title">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_3mmnadsu.json"  background="transparent"  speed="1"  style="width: 300px; height: 150px;"  loop autoplay></lottie-player>
                        <p style="color: var(--paragraph-color);font-family:Rubik">Sign up to your account</p>

                        <?php
                            if(isset($userReg)){
                                echo $userReg;
                            }
                        ?>

                    </div>
                    <form action="" method="POST" enctype = "multipart/form-data">
                        <div class="input-container">
                            <input type="file" name="image" value="image-upload" class="image-upload">
                        </div>
                        <div class="input-container">
                            <i class="fas fa-signature form-icon"></i>
                            <input class="input-feild" type="text" name="userName" placeholder="Name">
                        </div>
                        <div class="input-container">
                        <i class="fas fa-signature form-icon"></i>
                            <input class="input-feild" type="text" name="userUsername" placeholder="Username">
                        </div>
                        <div class="input-container">
                            <i class="fas fa-envelope-open form-icon"></i>
                            <input class="input-feild" type="text" name="userEmail" placeholder="E-mail">
                        </div>
                        <div class="input-container">
                            <i class="fas fa-mobile-alt form-icon"></i>
                            <input class="input-feild" type="text" name="mobileno" placeholder="Mobile No">
                        </div>
                        <div class="input-container">
                            <i class="fas fa-lock form-icon"></i>
                            <input class="input-feild" type="password" name="userPass"
                            placeholder="Password">
                        </div>
                        <br><br>
                        <input class="button" id="logregbutton" type="submit" name="register" value="SignUp">
                
                    </form>
                </div>
           
            </div>
            <div class="part-two">
            
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_xlmz9xwm.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
            
            </div>
                       
        </div>


<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer -->
    
    <!-- js code -->
    <script>
        id = document.getElementById("fa-plus");
        id.addEventListener("click",function(){
        id.style.background = "red";
        document.getElementById("navchild4").style.background = "#427A11";
    })
    </script>
               <!-- animation icon js -->
               <script>
            dt = document.getElementById("navchild5-top");
            dm = document.getElementById("navchild5-middle");
            db = document.getElementById("navchild5-bottom");
            dd = document.getElementsByClassName("dropdown");
            pa = document.getElementById("p");
            function myFunction(x) {
            document.getElementById("navchild5").addEventListener("click",function(){
            if(dt.style.transform === "rotate(0deg)"){
                dt.style.transform="rotate(45deg)";
                dt.style.position="relative";
                dt.style.top="4px";
                dm.style.display="none";
                db.style.transform="rotate(135deg)";
                db.style.position="relative";
                db.style.top="-4px";
                dd[0].style.display = "block";
            }else{
                dt.style.transform="rotate(0deg)";
                dt.style.position="static";
                dm.style.display="block";
                db.style.transform="rotate(0deg)";
                db.style.position="static";
                dd[0].style.display="none";
            }
        })
        if (x.matches) { // If media query matches
                    dd[0].style.display = "none";
                } else {
                dd[0].style.display = "none";
                dt.style.transform="rotate(0deg)";
                dt.style.position="static";
                dm.style.display="block";
                db.style.transform="rotate(0deg)";
                db.style.position="static";
                dd[0].style.display="none";
                }
        }
    
        var x = window.matchMedia("(min-width: 769px)")
        myFunction(x)
        x.addListener(myFunction)
        </script>
    <!-- button overlay script -->
    <script>
        function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
        }
    </script>
</body>
</html>
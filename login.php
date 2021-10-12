<!-- login header -->
<?php include('inc/second-header.php')?>
<!-- banner section start -->
<div class="login-banner banner">
                    <div class="banner-overlay">
                        <h1 class="banner-header">Sign In</h1>
                        <p> <a href="index.php">Home</a>  > SignIn</p>
                        <p> or<a href="registration.php"> SignUp</a>   </p>
                    </div>
                </div>
            <!-- banner section end -->
        </header>
<!-- login header -->

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
            $userLogin = $us->userLogin($_POST);
        }
    ?>

        <!-- main -->
        <div class="main-div">
            <div class="clip-one">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#061539" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,160C240,149,300,107,360,80C420,53,480,43,540,32C600,21,660,11,720,48C780,85,840,171,900,176C960,181,1020,107,1080,117.3C1140,128,1200,224,1260,229.3C1320,235,1380,149,1410,106.7L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
            </div>
            <div class="clip-two">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#061539" fill-opacity="1" d="M0,96L30,80C60,64,120,32,180,53.3C240,75,300,149,360,202.7C420,256,480,288,540,282.7C600,277,660,235,720,229.3C780,224,840,256,900,229.3C960,203,1020,117,1080,90.7C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
            </div>
           
            <div class="layout-main">
            <div class="part-one">
                <div>
                    <div class="title">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_3mmnadsu.json"  background="transparent"  speed="1"  style="width: 300px; height: 150px;"  loop autoplay></lottie-player>
                        <p class="font">Sign in to your account</p>

                        <?php
                            if (isset($userLogin)) {
                                echo $userLogin;
                            }
                        ?>

                    </div>
                    <form action="" method="post">
                        <div class="input-container">
                            <i class="fas fa-envelope-open form-icon"></i>
                            <input class="input-feild" type="text" name="userEmail" placeholder="E-mail">
                        </div>
                        
                        <div class="input-container">
                            <i class="fas fa-lock form-icon"></i>
                            <input class="input-feild" type="password" name="userPass"
                            placeholder="Password">
                        </div>
                        
                        <input class="button" type="submit" name="login" value="SignIn">
                
                    </form>
                </div>
           
            </div>
            <div class="part-two">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_xlmz9xwm.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                
                 </div>
                
                
        </div>


    <!-- footer start -->
        <footer>
            <section class="container">
                <div class="top-footer">
                    <div class="tf-one">
                        <h1>Contact Us</h1>
                        <table>
                            <tr>
                                <td class="first"><i class="fas fa-map-marker-alt"></i></td>
                                <td>420 Love Sreet 133/2 Mirpur City, Dhaka</td>
                                
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td>+8801980573601</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope"></i></td>
                                <td>jannatul15-1744@diu.edu.bd</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tf-two">
                        <h1>Quick link</h1>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">See Ads</a></li>
                            <li><a href="#">Give Ads</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="tf-three">
                        <h1 class="newslatter">Newslatter</h1>
                        <p>Lorem ipsum dolor sit amet,</p>
                        <div class="subscribe-div">
                            <input type="text" name="" id="#" placeholder="Your mail"><a href="#" class="subscribe">Subscribe</a>
                        </div>
                    </div>
                    <div class="tf-four">
                        <div class="copyright-area">
                            <small class="copyright-text">©2021, Copy Right By Skybird. All Rights Reserved</small>
                        </div>
                        
                    </div>
                </div>
            </section>
        </footer>
    <!-- footer end -->
    
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
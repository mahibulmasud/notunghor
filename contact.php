<!-- contact header -->
<?php include('inc/second-header.php')?>
 <!-- banner section start -->
 <div class="contact-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Contact</h1>
                <p> <a href="index.php">Home</a>  > Contact</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>
<!-- contact header -->

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])){
            $contactInfo = $con->contactInfo($_POST);
        }
    ?>


<!-- // -->
<div style="margin:50px"></div>
<!-- // -->
<style>

</style>
    <div class="contact-div">
        <div class="contact-clip-one"></div>
        <div class="contact-section container">
            <div class="cs-child-one ">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_eBcQGa.json"  background="transparent"  speed="1" style="width: 100%; height: 100%;"  loop autoplay></lottie-player>
            </div>
            <div class="cs-child-two">
                <h1>Contact Us</h1>
                <h4 style="text-align:center">We'd love to hear from you!</h4>

                        <?php
                            if (isset($contactInfo)) {
                                echo $contactInfo;
                            }
                        ?>

                <form action="" method="POST">
                    <div class="contact-inputfeild">
                        <input type="text" name="name" class="contact-inputfeild-input-text" placeholder="Name" >
                        
                    </div>
                    <div class="contact-inputfeild">
                        <input type="text" name="email" class="contact-inputfeild-input-text" placeholder="Email">
                       
                    </div>
                    <div class="contact-inputfeild">
                        <input type="text" name="phone" class="contact-inputfeild-input-text" placeholder="Phone">
                    
                    </div>
                    <div class="contact-inputfeild textarea">
                        <textarea name="body" class="contact-inputfeild-textarea" placeholder="Message" cols="100%" rows="10"></textarea>
                        
                    </div>
                    <div class="contact-inputfeild">
                        <!-- <button class="button" name="send"> <span>Send</span></button> -->
                        <input class="button" type="submit" name="send" value="Send">
                    </div>
                </form>
            </div>

        </div>
    </div>
   
<!-- // -->
<div style="margin:50px"></div>
<!-- // -->

<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer -->

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
</body>
</html>
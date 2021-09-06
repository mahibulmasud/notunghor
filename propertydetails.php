<?php //ob_start(); ?>
<!-- second header -->
<?php include('inc/second-header.php'); ?>
 <!-- banner section start -->
 <div class="propertydetails-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Property Details</h1>
                <p> <a href="propertydetails.php">Home</a>  > Property Details</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>
<!-- second header -->


<!-- php -->
<?php
    if(!isset($_GET['id']) || $_GET['id'] == NULL){
        header("Location: 404.php");
    }else{
        $id = $_GET['id'];
    }
?>
<!-- php -->


    <main>
        <!-- section 1 start-->
        <section class="pd-sectionone">
            <div class="pd-main container">
                <div class="pd-childone">


                <?php
                    $query = "SELECT * FROM tbl_post WHERE id =$id";
                    $post = $db->select($query);
                    if($post){
                            while($result = $post->fetch_assoc()){
                ?>



                    <h1 class="pd-childone-h1"><?php echo $result['title']; ?></h1>
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?php echo $result['address']; ?></span>
                </div>
                <div class="pd-childtwo">
                    <h1 class="pd-childtwo-h1"><?php echo $result['price']; ?>.00/- BDT</h1>
                    <p class="pd-childtwo-p">Per Month</p>
                </div>
            </div>
            <!-- image -->
            <div class="container">
                <img src="images/<?php echo $result['image']; ?>" alt="property ads" width="100%">
            </div>
        </section> 
        <!-- section 1 end-->
        <!-- Main Content -->
        <!-- section 2 start-->
        <section class="pd-sectiontwo">
            <div class="main-content-main container">
                <div>
                    <h2 class="st-description">Description</h2>
                    <p class="st-description-p"><?php echo $result['description']; ?></p>
                    

<?php } ?> <!-- while loop end -->

<?php } else { header("Location:404.php");}  ?><!-- if end --> 


                        <div class="comment-area">
                        <h1>Post Your Comment</h1><br>
                        <hr class="comment-hr">
                        <br><br>
                        <form action="">
                            <div class="comment-name-email-main">
                                <div>
                                    <label class="comment-label" for="">Enter Your Name</label><br>
                                    <input type="text" placeholder="Your name here..." class="comment-input">
                                </div>
                                <div>
                                    <label class="comment-label" for="">Enter Your Mail</label><br>
                                    <input type="email" name="" id="" placeholder="Your email here..." class="comment-input">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label class="comment-label" for="">Enter Your Message</label><br>
                                    <textarea name="'" id="" cols="55" rows="10" placeholder="Enter your message here..." class="comment-input"></textarea>
                                    <br><br><br><br>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="comment-submit-button">Submit Now</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="seller-minipro-div">
                        <h3 class="seller-about-h3 txt-center">About Me</h3>
                        <img src="images/masud1.jpg" class="seller-image" alt="">
                        <p class="seller-name txt-center">Kazi Masudur Rahman</p>
                        <p class="seller-description txt-center">Lorem ipsum dolor amet, Lore ipsum dolor sit amet, consectetur et eiLorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- section 2 end-->
    </main>

<div style="margin:50px"></div>
<!-- // -->

    <!-- footer start -->
        <footer>
            <!-- before footer -->
            <section class="beforefooter-section">
                <div class="before-footer">
                    <div class="bf-one">
                        <img src="images/logo.png" alt="">
                    </div>
                    <div class="bf-two">
                        <table>
                            <tr>
                                <td><a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a></td>
                                <td><a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a></td>
                                <td><a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            
            <!-- end -->
            <section class="container">
                <div class="top-footer">
                    <div class="tf-one">
                        <h1>Contact Us</h1>
                        <table>
                            <tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
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
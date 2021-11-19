
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
                <img src="<?php echo $result['image']; ?>" alt="property ads" width="100%">
            </div>
        </section> 
        <!-- section 1 end-->
        <!-- Main Content -->
        <!-- section 2 start-->
        <section class="pd-sectiontwo">
            <div class="main-content-main container">
                <div>
                    <div class="roomdetails-area">
                    <h2 class="st-header">Description</h2>
                    <p class="st-description-p"><?php echo $result['description']; ?></p>
                    </div>
                    
                   
                    
                    <div class="roomdetails-area">
                    <h2 class="st-header">Room details</h2>
                        <div class="rm-dt-main-div">
                                <div class="rm-dt-child-1"><p><b>Bedroom:</b> <?php echo $result['bedroom']; ?></p></div>
                                <div><p><b>Bathroom:</b> <?php echo $result['bathroom']; ?></p></div>
                                <div><p><b>Division:</b> <?php echo $result['division']; ?></p></div>
                                <div><p><b>District:</b> <?php echo $result['district']; ?></p></div>
                                <div><p><b>Thana:</b> <?php echo $result['thana']; ?></p></div>
                                <div><p><b>Sector No:</b> <?php echo $result['sectorno']; ?></p></div>
                                <div><p><b>Road no:</b> <?php echo $result['roadno']; ?></p></div>
                                <div><p><b>House No:</b> <?php echo $result['houseno']; ?></p></div>
                                <div class="rm-dt-child-address"><p><b>Address:</b> <?php echo $result['address']; ?></p></div>
                        </div>
                    </div>

                    <?php
                        // $query = "SELECT map FROM tbl_post WHERE id =$id";
                    ?>

                    <div class="roomdetails-area">
                        <h2 class="st-header">Home Location</h2>
                        <div class="rm-dt-map-div">
                        <?php echo $result['map'] ?>
                        </div>
                    </div>

                    <?php } ?> <!-- while loop end -->

                    <?php } else { header("Location:404.php");}  ?><!-- if end --> 

                </div>
                <div>
                    <div class="seller-minipro-div">
                    <h3 class="seller-about-h3 txt-center">About Me</h3>
                    <?php 
                        $login = Session::get("userlogin");
                        if ($login == false) {
                    ?>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_xyadoh9h.json"  background="transparent"  speed="1"  style=" height: 300px;"  loop  autoplay></lottie-player>
                        <p class="seller-description txt-center">Please Login First For Contact Information</p>
                        
                    <?php
                    }else{
                        ?>
                        <?php
                            $query = "SELECT *
                                      FROM tbl_post
                                      JOIN tbl_user
                                      ON tbl_post.userId = tbl_user.userId WHERE id =$id";

                            $post = $db->select($query);
                            if ($post) {
                            while($result = $post->fetch_assoc()){
                            ?>
                        <img src="<?php echo $result['userImage']; ?>" class="seller-image" alt="">
                        <p class="seller-name txt-center"><?php echo $result['userName']; ?></p>
                        <p class="seller-description txt-center">Lorem ipsum dolor amet, Lore ipsum dolor sit amet, consectetur et eiLorem ipsum dolor sit amet</p>
                        <div class="seller-icon-main-row">
                            <div>
                            <div class="tooltip"><i class="fas fa-mobile-alt seller-info-icon"></i>
                                <span class="tooltiptext"><?php echo $result['mobileNo']; ?></span>
                            </div>
                            </div>
                            <div>
                                <a href="<?php echo $result['facebook']; ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f seller-info-icon"></i>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo $result['twitter']; ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-twitter seller-info-icon"></i>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo $result['instagram']; ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram seller-info-icon"></i>
                                </a>
                            </div>
                        </div>
                        
                        <?php
                            } 
                          }
                        }
                        ?>
                    </div>
                </div>
                
            </div>
            
        </section>
        <!-- section 2 end-->
        
    </main>

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
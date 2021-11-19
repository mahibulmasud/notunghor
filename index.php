<!-- index header -->
<?php include('inc/index/header.php'); ?>
<!-- index header -->
    <main>
        <section style="position: relative;">
            <!-- design -->
            <!-- <div class="left-design"></div>
            <div class="right-design"></div> -->
            <!-- design -->
            <h1 class="section-header smd" data-aos="fade-right">Recent Ads <span class="ads-header-snd">For You</span></h1>
            <hr class="horizontal-line">
            
                <!-- card start  -->
                <div class="card-main container">

                    <!-- php -->
                    <?php
                        $query = "SELECT * FROM tbl_post ORDER BY id DESC limit 6";
                        $post = $db->select($query);
                        if($post){
                                while($result = $post->fetch_assoc()){      
                    ?>
                    <!-- php -->


                    <div class="card-area" style="position: relative;">
                    <a href="propertydetails.php?id=<?php echo $result['id']; ?>" class="card-link">
                    <img src="<?php echo $result['image']; ?>" alt="">
                        <h2 class="card-price"><?php echo $result['price']; ?></h2>
                             
                                <h3 class="card-title"><?php echo $result['title']; ?></h3>
                                <table>
                                    <tr>
                                        <td><i class="fas fa-map-marker-alt"></i></td>
                                        <td><h6><?php echo $result['address']; ?></h6></td>
                                     </tr>
                                </table>
                                <div class="card-footer">
                                    <table>
                                        <tr>
                                            <td><i class="fas fa-bed"></i></td>
                                            <td><?php echo $result['bedroom']; ?></td>
                                            <td>Bedroom</td>
                                        </tr>
                                    </table>
                           
                                    <table>
                                            <tr>
                                                <td><i class="fas fa-bath"></i></td>
                                                <td><?php echo $result['bathroom'] ?></td>
                                                <td>Bathroom</td>
                                            </tr>
                                    </table>   
                                </div>
                        </a>
                              
                    </div>  

<?php } ?> <!-- while loop end -->

<?php } else { header("Location:404.php");}  ?><!-- if end --> 
                

                </div>
                <!-- card end -->








        </section>
        <div class="space"></div>
    <!-- Recent Ads end-->

<!-- review -->
<?php include('inc/index/review.php') ?>
<!-- review -->
</main>
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
    <!-- animation css javascript link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

        AOS.init({
            duration:2000,
        });

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
                // document.body.style.backgroundColor = "yellow";
                // pa.style.color = "red";
                dd[0].style.display = "none";
            } else {
            // document.body.style.backgroundColor = "pink";
            // pa.style.color = "blue";
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
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes
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

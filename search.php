<?php ob_start(); ?>
<!-- second header -->
<?php include('inc/second-header.php')?>
<!-- banner section start -->
<div class="property-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Property</h1>
                <p> <a href="#">Home</a>  > Property</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>
<!-- second header -->
<?php
    if(!isset($_GET['search']) || $_GET['search'] == NULL){
        header('Location:404.php');
    }else{
        $search = $_GET['search'];
    }
?>
    <main>
        <!-- section 1 start-->
        <div class="serach-bar-main">
            <div class="search-bar-child searchbar-child-one">
                <h3>21 properties</h3>
            </div>
            <div class="search-bar-child searchbar-child-two">
            <form action="search.php" method="get">
                <input type="text" name="search" id="" class="search" placeholder="Search by district">
                <button type="submit" class="search-button"> <i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="search-bar-child searchbar-child-three custom-select">
                    <select>
                        <option value="0">Select District:</option>
                        <option value="1">Chandpur</option>
                        <option value="1">Cumilla</option>
                        <option value="1">Dhaka</option>
                    </select>
            </div>
            
        </div>
        <!-- section 1 end-->
        <!-- section 2 start -->
                        <!-- card start  -->
                        <div class="card-main container">
                            <!-- php -->
                            <?php
                                $query = "SELECT * FROM tbl_post WHERE address  LIKE '%$search%'";
                                $post = $db->select($query);
                                if($post){
                                    while($result = $post->fetch_assoc()){        
                            ?>
                            <!-- php -->
                            <div class="card-area" style="position: relative;">
                            <a href="propertydetails.php?id=<?php echo $result['id']; ?>" class="card-link">
                                <img src='images/<?php echo $result['image'] ?>'>
                                <h2 class="card-price"><?php echo $result['price'] ?></h2>
                                     
                                        <h3 class="card-title"><?php echo $result['title'] ?></h3>
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
                                                        <td><?php echo $result['bathroom']; ?></td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                    </a>         
                            </div>  
<?php } ?> <!-- while loop end -->
<?php } else{ ?>
    <p>OppS! Not found anything</p>
    
 <?php } ?><!-- if end -->
                        </div>
                        <!-- card end -->
            <!-- section 2 end -->
    </main>

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
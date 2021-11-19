<!-- footer start -->
<footer>
            <!-- before footer -->
            <section class="beforefooter-section">
                <div class="before-footer">
                    <div class="bf-one">
                    <?php
                            $query = "SELECT * FROM tbl_siteoption";
                            $post = $db->select($query);
                            if($post){
                                    while($result = $post->fetch_assoc()){
                        ?>

                       <a href="index.php"><img src="admin/<?php echo $result['logo']; ?>" alt="sitelogo"></a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="bf-two">
                        <table>

                        <?php
                        $query = "SELECT * FROM tbl_sitesocial";
                        $post = $db->select($query);
                        if($post){
                                while($result = $post->fetch_assoc()){
                        ?>

                            <tr>
                                <td><a href="<?php echo $result['facebook']; ?>" class="footer-icon" target="_blank"><i class="fab fa-facebook-f"></i></a></td>
                                <td><a href="<?php echo $result['twitter']; ?>" class="footer-icon" target="_blank"><i class="fab fa-twitter"></i></a></td>
                                <td><a href="<?php echo $result['instagram']; ?>" class="footer-icon" target="_blank"><i class="fab fa-instagram"></i></a></td>
                            </tr>


                            <?php
                                }
                            }
                            ?>

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
                                <td class="tf-one-first"><i class="fas fa-map-marker-alt"></i></td>
                                <td class="tf-one-first">420 Love Sreet 133/2 Mirpur City, Dhaka</td>
                                
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td>+8801980573601</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope"></i></td>
                                <td>admin@notunghor.com</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tf-two">
                        <h1>Quick link</h1>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <?php
                                if (isset($_GET['uid'])){
                                    Session::destroy();
                                }
                            ?>
                                    <?php 
                                    $login = Session::get("userlogin");
                                    if ($login == false) {
                                ?>
                                   <li><a href="registration.php">SignUp</a></li>
                                   <li><a href="login.php">SignIn</a></li>
                                <?php
                                        }else{
                                    ?>
                                    <li><a href="?uid=<?php Session::get('uid'); ?>" class="login">Logout</a></li>
                                    <?php
                                        }
                                    ?>
                        </ul>
                    </div>
                    <div class="tf-three">
                        <h1 class="newslatter">Newslatter</h1>
                        <p>Lorem ipsum dolor sit amet,</p>

                            <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subscribe'])){
                                $SendSubscribemail = $so->SendSubscribemail($_POST);
                                }
                            ?>

                        <div class="subscribe-div">
                                <?php
                                    if (isset($SendSubscribemail)) {
                                        echo $SendSubscribemail;
                                    }
                                ?>
                            <form action="" method="post">
                                <input type="text" name="email" id="#" placeholder="Your mail">
                                <input type="submit" id="subscribe" name="subscribe" value="Subscribe"></input>
                            </form>
                        </div>
                    </div>
                    <div class="tf-four">


                    <?php
                    $query = "SELECT * FROM tbl_siteoption";
                    $post = $db->select($query);
                    if($post){
                            while($result = $post->fetch_assoc()){
                    ?>

                        <div class="copyright-area">
                            <small class="copyright-text"><?php echo $result['copyright']; ?></small>
                        </div>

                        <?php
                                }
                            }
                            ?>


                        
                    </div>
                </div>
            </section>
        </footer>
    <!-- footer end -->

    <!-- modal javascript start-->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- modal javascript end-->

<?php
 ob_flush();
?>
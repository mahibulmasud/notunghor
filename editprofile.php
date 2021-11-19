<!-- index header -->
<?php include('inc/second-header.php'); ?>
<!-- index header -->

<?php 
    $login = Session::get("userlogin");
    if ($login == false) {
        header("Location:login.php");
    }
?>


<?php
    $usrid = Session::get("uid");
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
        $updateUser = $us->userUpdate($_POST, $_FILES, $usrid);
    }
?>

<div class="space"></div>
<div class="container profile-container">
    <?php
        $id =  Session::get("uid");
        $getdata = $us->getUserData($id);
        if ($getdata) {
            while($result = $getdata->fetch_assoc()){

    ?>
    <form action="" method="POST" enctype = "multipart/form-data">
    <table class="user-profile-table">

        <tr>
            <td colspan="3" style="text-align:center;"> <b class="profile-header-text">Update Profile Details</b></td>
        </tr>
            <?php
            if (isset($updateUser)) {
                echo "<tr><td colspan='3' align='center'>".$updateUser."</td></tr>";
            }
                
            ?>
            
        
        <tr>
            <td width="15%"><b>Profile Picture</b></td>
            <td colspan="2">
                <img src="<?php echo $result['userImage']; ?>" alt="" width="100px" height="100px" style="display:block;margin-bottom:10px">
 
                <input type="file" name="image" class="edit-profile-image-input" id="">
                
            </td>
        </tr>
        <tr>
            <td><b>Name</b></td>
            <td><input type="text" name="userName" value="<?php echo $result['userName']; ?>"></td>
        </tr>
        <tr>
            <td><b>UserName</b></td>
            <td><input type="text" name="userUsername" value="<?php echo $result['userUsername']; ?>"></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><input type="text" name="userEmail" value="<?php echo $result['userEmail']; ?>"></td>
        </tr>
        <tr>
            <td><b>Mobile No</b></td>
            <td><input type="text" name="mobileno" value="<?php echo $result['mobileNo']; ?>"></td>
        </tr>
        <tr>
            <td><b>Facebook</b></td>
            <td><input type="text" name="facebook" value="<?php echo $result['facebook']; ?>"></td>
        </tr>
        <tr>
            <td><b>Twitter</b></td>
            <td><input type="text" name="twitter" value="<?php echo $result['twitter']; ?>"></td>
        </tr>
        <tr>
            <td><b>Instagram</b></td>
            <td><input type="text" name="instagram" value="<?php echo $result['instagram']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td> 
                <input type="submit" id="myBtn" name="update" class="user-update-button" value="Update">
                <a href="profile.php" class="user-update-details">Profile</a>
            </td>
        </tr>
    </table>
    </form>
        <?php
            }
        }
        ?>
</div>

<div class="space"></div>

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
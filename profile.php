<!-- index header -->
<?php include('inc/second-header.php'); ?>
<!-- index header -->

<?php 
    $login = Session::get("userlogin");
    if ($login == false) {
        header("Location:login.php");
    }
?>




<div class="space"></div>
<div class="container">
    <?php
        $id =  Session::get("uid");
        $getdata = $us->getUserData($id);
        if ($getdata) {
            while($result = $getdata->fetch_assoc()){

    ?>
    <table class="user-profile-table">
        <tr>
            <td colspan="3" style="text-align:center;"> <b class="profile-header-text">My Profile Details</b></td>
        </tr>
        <tr>
            <td width="15%"><b>Profile Picture</b></td>
            <td width="5%"><b>:</b></td>
            <td colspan="3"><img src='<?php echo $result['userImage']; ?>' alt="" width="100px" height="100px"></td>
        </tr>
        <tr>
            <td><b>Name</b></td>
            <td><b>:</b></td>
            <td> <?php echo $result['userName']; ?> </td>
        </tr>
        <tr>
            <td><b>UserName</b></td>
            <td><b>:</b></td>
            <td><?php echo $result['userUsername']; ?></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><b>:</b></td>
            <td><?php echo $result['userEmail']; ?></td>
        </tr>
        <tr>
            <td><b>Mobile No</b></td>
            <td><b>:</b></td>
            <td><?php echo $result['mobileNo']; ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td> 
                <a href="editprofile.php" class="user-update-details">Update Details</a>
                <a href="?uid=<?php Session::get('uid'); ?>" class="logout">Logout</a>
            </td>
        </tr>
    </table>
        <?php
            }
        }
        ?>
</div>
<div class="space"></div>
<div class="container">
    <table class="user-profile-table">
        <tr>
            <td colspan="4" style="text-align:center;"> <b class="profile-header-text">My Ads Info</b></td>
        </tr>
        <tr>
            <td align="start" style="padding-left:10px"><b></b> Property ID</td>
            <td>Image</td>
            <td>Title</td>
            <td>Action</td>
        </tr>

                <?php
                    $id =  Session::get("uid");
                    $query = "SELECT *  
                    FROM tbl_post
                    JOIN tbl_user
                    ON tbl_post.userId = tbl_user.userId where tbl_post.userId = '$id'";
                    $post = $db->select($query);
                    if($post){
                            while($result = $post->fetch_assoc()){
                ?>

        <tr>
            <td width="15%"><span><?php echo $result['id'] ?></span></td>
            <td><img src="<?php echo $result['image']; ?>" width='100px' alt=""></td>
            <td><?php echo $result['title'] ?></td>
            <td>
            <a href="editpost.php?id=<?php echo $result['id']; ?>" class="user-update-details">Edit</a>
            <a href="deletepost.php?deletepostid=<?php echo $result['id']; ?>" class="logout">Delete</a>
                
        </td>
        </tr>
        <?php }} ?>
    </table>
   
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
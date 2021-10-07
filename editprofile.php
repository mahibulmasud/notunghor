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
<div class="container">
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
                echo "<tr><td colspan='3' style='text-align:center;'>".$updateUser."</td></tr>";
            }
                
            ?>

        
        <tr>
            <td width="15%"><b>Profile Picture</b></td>
            <td colspan="2">
                <img src="<?php echo $result['userImage']; ?>" alt="" width="100px" height="100px" style="display:block;margin-bottom:10px">
 
                <input type="file" name="image" id="">
                
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
            <td></td>
            <td> 
                <input type="submit" name="update" class="user-update-button" value="Update">
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
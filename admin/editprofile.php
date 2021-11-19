<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->

<?php 
    // $login = Session::get("userlogin");
    // if ($login == false) {
    //     header("Location:login.php");
    // }
?>


<?php
    // $adminid = Session::get("adminId");
    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
    //     $adminUpdate = $al->adminUpdate($_POST, $_FILES, $adminid);
    // }
?>



<?php
        $adminid = Session::get("adminId");
        $query = "SELECT * FROM tbl_admin WHERE adminId = '$adminid'";
        $post = $db->select($query);
        if ($post) {
            while($result = $post->fetch_assoc()){

    ?>


    <!-- body part -->
    <div style="margin:50px"></div>

    <div class="admin-table">
        <form action="" method="POST">
        <table class="profile-table">
            <tr  class="table-head">
                <td colspan="3" align="center">
                    <b id="profile-header-text">Update Profile Details</b>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td width="25%"><b>Profile Picture</b></td>
                <td width="5%"><b>:</b></td>
                <td><img src="<?php echo $result['adminImage']; ?>" width="100px" alt="profile image"></td>
            </tr>
            <tr>
                <td><b>Name</b></td>
                <td><b>:</b></td>
                <td><input type="text" value="<?php echo $result['adminName']; ?>"></td>
            </tr>
            <tr>
                <td><b>User Name</b></td>
                <td><b>:</b></td>
                <td><input type="text" value="<?php echo $result['adminUser']; ?>"></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td><b>:</b></td>
                <td><input type="text" value="<?php echo $result['adminEmail']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="update" class="pass-up-btn" value="Update">
                    <a href="profile.php" class="btn" id="btn-heading">Back</a>
                </td>
            </tr>
        </table>
        </form>

        <?php
            }
        }
        ?>

    </div>
   

    <div style="margin:50px"></div>
    <!-- body part -->


    <div style="height:40vh"></div>


<!-- admin footer-->
<?php include "inc/adminfooter.php" ?>
<!-- admin footer-->
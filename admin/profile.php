<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->


    <?php
        $id =  Session::get("adminId");
        $query = "SELECT * FROM tbl_admin WHERE adminId = '$id'";
        $post = $db->select($query);
        if ($post) {
            while($result = $post->fetch_assoc()){

    ?>


    <!-- body part -->
    <div style="margin:50px"></div>

    <div class="admin-table">
        <table class="profile-table">
            <tr class="table-head">
                <td colspan="3" align="center">
                    <b id="profile-header-text">Admin Profile Details</b>
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
                <td><?php echo $result['adminName']; ?></td>
            </tr>
            <tr>
                <td><b>User Name</b></td>
                <td><b>:</b></td>
                <td><?php echo $result['adminUser']; ?></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td><b>:</b></td>
                <td><?php echo $result['adminEmail']; ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a class="btn" id="btn-heading" href="editprofile.php">Update Details</a>
                </td>
            </tr>
        </table>


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
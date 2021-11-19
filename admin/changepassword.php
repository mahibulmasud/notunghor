<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->




<?php 
    $login = Session::get("adminlogin");
    if ($login == false) {
        header("Location:login.php");
    }
?>

    <?php
         $adminId = Session::get("adminId");
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
            $ChangePassword = $cp->ChangePassword($_POST, $adminId);
        }
    ?>


    <!-- body part -->
    <div style="margin:50px"></div>

    <form action="" method="POSt">
    <div class="admin-table">
    <table class="profile-table">

    <tr  class="table-head">
        <td colspan="3" align="center">
            <b id="profile-header-text">Change Your Password</b>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <?php
                if (isset($ChangePassword)) {
                    echo $ChangePassword;
                }
            ?>
        </td>

    </tr>

        <tr>
            <td width="30%">Old Password </td>
            <td width="5%">:</td>
            <td><input type="text" name="oldpass" id="" style="padding:10px;border:0px"></td>
        </tr>
        <tr>
            <td>New Password</td>
            <td>:</td>
            <td><input type="text" name="newpass" id="" style="padding:10px;border:0px"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="update" class="pass-up-btn" value="Update"></td>
        </tr>
    </table>
    </div>
    </form>
    <div style="margin:50px"></div>
    <!-- body part -->


    <div style="height:35vh"></div>


<!-- admin footer-->
<?php include "inc/adminfooter.php" ?>
<!-- admin footer-->
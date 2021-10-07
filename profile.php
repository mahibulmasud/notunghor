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
            <td colspan="3" style="text-align:center;"> <b class="profile-header-text">Your Profile Details</b></td>
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

<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer -->
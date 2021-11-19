<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->

<!-- php -->
<?php
    if(!isset($_GET['msgid']) || $_GET['msgid'] == NULL){
        header("Location: inbox.php");
    }else{
        $id = $_GET['msgid'];
    }
?>
<!-- php -->


    <!-- body part -->
    <div style="margin:50px"></div>

    <form action="" method="POSt">

    <?php
    $query = "SELECT * FROM tbl_contact WHERE id = '$id'";
    $post = $db->select($query);
    if ($post) {
        while($result = $post->fetch_assoc()){
    ?>



    <div class="admin-table">
    <table class="profile-table">

    <tr  class="table-head">
        <td colspan="3" align="center">
            <b id="profile-header-text">View Message</b>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
        </td>

    </tr>

        <tr>
            <td width="15%">Name</td>
            <td width="5%">:</td>
            <td><input type="text" readonly value="<?php echo $result['name'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" readonly value="<?php echo $result['email'] ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td><input type="text" readonly value="<?php echo $result['phone'] ?>"></td>
        </tr>
        <tr>
            <td>Date</td>
            <td>:</td>
            <td><input type="text" readonly value="<?php echo $fm->formatDate($result['date']); ?>"></td>
        </tr>
        <tr>
            <td>Time</td>
            <td>:</td>
            <td><input type="text" readonly value="<?php echo $fm->formatTime($result['date']); ?>"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td>:</td>
            <td>
                <textarea readonly cols="40" rows="10"><?php echo $result['body'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><a href="inbox.php" class="btn" id="btn-heading">Back</a></td>
        </tr>
    </table>
    </div>

    <?php
                }
            }
            ?>

    </form>
    <div style="margin:50px"></div>
    <!-- body part -->


    <div style="height:35vh"></div>


<!-- admin footer-->
<?php include "inc/adminfooter.php" ?>
<!-- admin footer-->
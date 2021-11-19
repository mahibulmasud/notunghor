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


<!-- message sent portion  -->
<?php

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
            <b id="profile-header-text">Replay Message</b>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center"></td>

    </tr>

    <tr>
        <td colspan="3">
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $to = $_POST['toEmail'];
                $from = $_POST['fromEmail'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
            
                $sendmail = mail($to, $subject, $message, $from);
                    if ($sendmail) {
                        echo "<span style='color:green'>Message Sent Successfully.<span>";
                    }else{
                        echo "<span style='color:red'>Something went Wrong!.<span>";
                    }
                }
            ?>
        </td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>


        <tr>
            <td width="15%">To</td>
            <td width="5%">:</td>
            <td><input type="text" readonly name="toEmail" value="<?php echo $result['email'] ?>"></td>
        </tr>
        <tr>
            <td>From</td>
            <td>:</td>
            <td><input type="text" name="fromEmail" placeholder="Please enter your email address" required></td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>:</td>
            <td><input type="text" name="subject" placeholder="Please enter your subject"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td>:</td>
            <td>
                <textarea cols="40" rows="10" name="message" placeholder="please enter your message"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="update" class="pass-up-btn" value="SEND">
            </td>
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
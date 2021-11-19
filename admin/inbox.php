<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->


       <!-- body part -->
       <!-- inbox -->
       <div style="margin:50px"></div>

    <div class="admin-table-main">
        <table class="inbox-table">
            <tr>
                <th colspan="6"><b id="profile-header-text" style="text-align:start">Inbox</b></th>
            </tr>


            <!-- php -->
            <?php
                if(isset($_GET['seenid'])){
                    $seenid = $_GET['seenid'];
                    // echo $seenid;
                    $query = "UPDATE tbl_contact
                                    SET
                                    status ='1'
                                    WHERE id ='$seenid'";
                    $updated_row = $db->update($query);
                            if ($updated_row) {
                                echo "<p style='color:green;'>message send to send message section</p>";
                            }else{ 
                                echo "<p style='color:red;'>Sorry! Failed to send messages to send box</p>";
                            }
                    }
            ?>

            <!-- php -->

            <tr class="table-head">
                <th width="10%">Sl. No.</th>
                <th width="15%">Name</th>
                <th>Email</th>
                <!-- <th>Phone</th> -->
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

            <?php
            $query = "SELECT * FROM tbl_contact WHERE status='0' ORDER BY id DESC";
            $post = $db->select($query);
            if ($post) {
                $i = 0;
                while($result = $post->fetch_assoc()){
                    $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['email'] ?></td>
                
                <td><?php echo $fm->textShorten($result['body'], 30) ?></td>
                <td><?php echo $fm->formatDate($result['date']); ?></td>
                <td>
                    <a href="viewmsg.php?msgid=<?php echo $result['id']; ?>" class="btn">View</a>
                    <a href="replaymsg.php?msgid=<?php echo $result['id']; ?>" class="btn" id="btn-heading">Reply</a>
                    <a href="?seenid=<?php echo $result['id']; ?>" class="btn" style="background:red;">Seen</a>
                </td>
            </tr>

            <?php
                }
            }
            ?>
        </table>
    </div>
    


    <div style="margin:50px"></div>
    <!-- inbox -->


    <!-- ------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------- -->

           <!-- seen message -->
           <div style="margin:50px"></div>

<div class="admin-table-main">
    <table class="inbox-table">
            <tr>
                <th colspan="6"><b id="profile-header-text" style="text-align:start">Seen Message</b></th>
            </tr>

            <!-- php for delete  -->
            <?php
                if(isset($_GET['delid'])){
                    $delid = $_GET['delid'];
                    // echo $seenid;
                    $query = "DELETE from tbl_contact WHERE id ='$delid'";
                    $updated_row = $db->delete($query);
                            if ($updated_row) {
                                echo "<p style='color:green;'>message delete successfully</p>";
                            }else{ 
                                echo "<p style='color:red;'>Sorry! Failed to send messages to send box</p>";
                            }
                    }
            ?>

            <!-- php -->

            <!-- php for unseen -->
            <?php
                if(isset($_GET['unseenid'])){
                    $unseenid = $_GET['unseenid'];
                    // echo $seenid;
                    $query = "UPDATE tbl_contact
                                    SET
                                    status ='0'
                                    WHERE id ='$unseenid'";
                    $updated_row = $db->update($query);
                        if ($updated_row) {
                            echo "<p style='color:green;'>message unsend successfully</p>";
                        }else{ 
                            echo "<p style='color:red;'>Sorry! Failed to send messages to inbox</p>";
                        }
                    }
            ?>

            <!-- php -->



        <tr class="table-head">
            <th width="10%">Sl. No.</th>
            <th width="15%">Name</th>
            <th>Email</th>
            <!-- <th>Phone</th> -->
            <th>Message</th>
            <th>Date</th>
            <th width="20%">Action</th>
        </tr>

        <?php
        $query = "SELECT * FROM tbl_contact WHERE status='1' ORDER BY id DESC";
        $post = $db->select($query);
        if ($post) {
            $i = 0;
            while($result = $post->fetch_assoc()){
                $i++;
        ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['email'] ?></td>
            
            <td><?php echo $fm->textShorten($result['body'], 30) ?></td>
            <td><?php echo $fm->formatDate($result['date']); ?></td>
            <td>
                <a href="viewmsg.php?msgid=<?php echo $result['id']; ?>" class="btn">View</a>
                <a href="?unseenid=<?php echo $result['id']; ?>" class="btn" id="btn-heading">UnSeen</a>
                <a href="?delid=<?php echo $result['id'] ?>" style="background:red;" class="btn">Delete</a>
            </td>
        </tr>

        <?php
            }
        }
        ?>
    </table>
</div>



<div style="margin:50px"></div>
<!-- seen message -->
    <!-- body part -->



    <div style="height:10vh"></div>

<!-- admin footer-->
<?php include "inc/adminfooter.php" ?>
<!-- admin footer-->
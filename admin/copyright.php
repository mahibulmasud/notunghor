<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->




<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
            $updateCopyRight = $so->updateCopyRight($_POST);
        }
    ?>


  <!-- body part -->
  <div style="margin:50px"></div>


                <?php
                    $query = "SELECT * FROM tbl_siteoption";
                    $post = $db->select($query);
                    if($post){
                            while($result = $post->fetch_assoc()){
                ?>




<form action="" method="post">
<div class="admin-table">
<table class="profile-table">

<tr  class="table-head">
                <td colspan="3" align="center">
                    <b id="profile-header-text">Update CopyRight Text</b>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                   <?php
                    if (isset($updateCopyRight)) {
                        echo $updateCopyRight;
                    }
                    ?>
                </td>

            </tr>

    <tr>
        <td width="30%">CopyRight text </td>
        <td width="5%">:</td>
        <td><input type="text" name="copyright" id="" value="<?php echo $result['copyright']; ?>" style="padding:10px;border:0px;width:100%"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="update" class="pass-up-btn" value="Update"></td>
    </tr>
</table>
</div>
</form>


        <?php
            }
        }
        ?>


<div style="margin:50px"></div>
<!-- body part -->

<div style="height:35vh"></div>



<!-- admin footer-->
<?php include "inc/adminfooter.php" ?>
<!-- admin footer-->
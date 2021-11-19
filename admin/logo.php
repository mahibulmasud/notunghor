<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
            $updateLogo = $so->updateLogo($_FILES);
        }
    ?>
    
<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mupdate'])){
            $updateLogo = $so->updateMobLogo($_FILES);
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


<form action="" method="post" enctype = "multipart/form-data">
<div class="admin-table">
<table class="profile-table">

    <tr  class="table-head">
        <td colspan="3" align="center">
            <b id="profile-header-text">Update Desktop Logo</b>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <?php
            if (isset($updateLogo)) {
                echo $updateLogo;
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
        <td colspan="3"><small><span style="color:red">*</span> Recommended size 232 x 62 (px)</small></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="30%">Preview Logo </td>
        <td width="5%">:</td>
        <td style="background:#0d1741;border-radius:10px;" ><img src="<?php echo $result['logo'];?>" alt="logo" width="232px" height="62px" ></td>
    </tr>
    <tr>
        <td>New Logo</td>
        <td>:</td>
        <td><input type="file" name="logo" id="#" style="padding:10px;border:0px"></td>
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
<!-- ----------------------------------------------- -->
            <!-- mobile logo update start-->
<!-- ----------------------------------------------- -->

<?php
                    $query = "SELECT * FROM tbl_siteoption";
                    $post = $db->select($query);
                    if($post){
                            while($result = $post->fetch_assoc()){
                ?>


<form action="" method="post" enctype = "multipart/form-data">
<div class="admin-table">
<table class="profile-table">

    <tr  class="table-head">
        <td colspan="3" align="center">
            <b id="profile-header-text">Update Mobile Logo</b>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <?php
            if (isset($updateMobLogo)) {
                echo $updateMobLogo;
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
        <td colspan="3"><small><span style="color:red">*</span> Recommended size 45 x 45 (px)</small></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="30%">Preview Logo </td>
        <td width="5%">:</td>
        <td style="background:#0d1741;border-radius:10px;" ><img src="<?php echo $result['mobilelogo'];?>" alt="logo" width="45px" height="45px" ></td>
    </tr>
    <tr>
        <td>New Logo</td>
        <td>:</td>
        <td><input type="file" name="logo" id="#" style="padding:10px;border:0px"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="mupdate" class="pass-up-btn" value="Update"></td>
    </tr>
</table>
</div>
</form>

    <?php
            }
        }
        ?>
<!-- ----------------------------------------------- -->
            <!-- mobile logo update end-->
<!-- ----------------------------------------------- -->

<div style="margin:50px"></div>
<!-- body part -->




<!-- admin footer-->
<?php include "inc/adminfooter.php" ?>
<!-- admin footer-->
<!-- admin navbar -->
<?php include "inc/adminnav.php" ?>
<!-- admin navbar -->

<!-- admin header -->
<?php include "inc/adminheader.php" ?>
<!-- admin header -->

    <!-- left content end-->
    
            
        <!-- section one start-->
        <section style="background-color: #F2F5FC">
            <div class="dashboard-card-main">
                <div class="dcm-childs">
                    <?php
                        $query = "SELECT * FROM tbl_post";
                        $result = $db->select($query);
                        $total_rows = mysqli_num_rows($result);
                    ?>
                    <h1 class="dc-h1"><?php echo $total_rows ?></h1>
                    <p class="dc-p">Posts</p>
                    <i class="fas fa-mail-bulk dashborad-card-icon"></i>
                </div>
                <div class="dcm-childs">
                    <?php
                        $query = "SELECT * FROM tbl_user";
                        $result = $db->select($query);
                        $total_rows = mysqli_num_rows($result);
                    ?>
                    <i class="fas fa-users dashborad-card-icon"></i>
                    <h1 class="dc-h1"><?php echo $total_rows ?></h1>
                    <p class="dc-p">registered</p>
                </div>
                <div class="dcm-childs">
                    <?php
                        $query = "SELECT * FROM tbl_subscribe";
                        $result = $db->select($query);
                        $total_rows = mysqli_num_rows($result);
                    ?>
                    <i class="fab fa-youtube dashborad-card-icon"></i>
                    <h1 class="dc-h1"><?php echo $total_rows ?></h1>
                    <p class="dc-p">subscribe</p>
                </div>
                <div class="dcm-childs">
                    <?php
                        $query = "SELECT * FROM tbl_contact";
                        $result = $db->select($query);
                        $total_rows = mysqli_num_rows($result);
                    ?>
                    <i class="far fa-comments dashborad-card-icon"></i>
                    <h1 class="dc-h1"><?php echo $total_rows ?></h1>
                    <p class="dc-p">comments</p>
                </div>
            </div>
        </section>
        <!-- section one end-->


        <div style="height:35vh"></div>



       <!-- admin footer-->
       <?php include "inc/adminfooter.php" ?>
       <!-- admin footer-->
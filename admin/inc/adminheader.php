    <!-- right content -->
    <div class="displayright-structure">
    <!-- admin header start -->
    <div class="admin-menu">
        <div class="am-child-one">
            <i class="fas fa-bars bar-icon" onclick="navbarIcon()"></i>
            <h1 class="dasboard-text">Dashboard</h1>
        </div>
        <div class="am-child-two">
            <i class="fa fa-search am-search"></i>
            <input type="search" name="" id="" placeholder="Search here">
        </div>
        <div class="am-child-three">
            <div>
                <img src="<?php echo Session::get('adminImage'); ?>" alt="">
                <p><?php echo Session::get('adminUser'); ?></p>
            </div>
        </div>
    </div>
    <!-- admin header end -->
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
            
            <img src="images/masud1.jpg" alt="">
            <p><?php echo Session::get('adminName'); ?></p>
        </div>
    </div>
    <!-- admin header end -->
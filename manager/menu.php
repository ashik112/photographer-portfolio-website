<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php"><span>::::::Photography::::::</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i>
                            	<?php echo $_SESSION['USER']; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->
<div class="container-fluid-full">
    <div class="row-fluid">
        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <!--<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>-->	
                    <li><a href="add_shop.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Project</span></a></li>
                    
                     <li><a href="add_product.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Project Photographs</span></a></li>
                    
					<?php if($_SESSION['role']=="ADMIN"): ?>
                   <!-- <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Setup</span></a>
                        <ul>
                            <li><a class="submenu" href="add_division.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Division</span></a></li>
                            <li><a class="submenu" href="add_district.php"><i class="icon-file-alt"></i><span class="hidden-tablet">District</span></a></li>
                            <li><a class="submenu" href="category.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Category</span></a></li>
                            <li><a class="submenu" href="sub_category.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Sub-Category</span></a></li>
                        </ul>	
                    </li>-->
                   <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->
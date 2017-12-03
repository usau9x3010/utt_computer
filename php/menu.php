 <?php $info = $_SESSION['web_info']; ?>
 <?php 
require_once "config/cnn.php";
$db  =  new Connect();
?>
 <div role="navigation" class="navbar header no-margin">
        <div class="container">
            <div class="navbar-header">
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Chuyển đổi điều hướng</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <a href="index.php" class="navbar-brand"><img src="<?php echo $info['logo'] ?>" alt="Metronic Shop UI"></a><!-- LOGO -->
            </div>
            <!-- BEGIN CART -->
            <?php require_once "php/cart.php"; ?>
            <!-- END CART -->
            <!-- BEGIN NAVIGATION -->
            <div class="collapse navbar-collapse mega-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="index.php?page=cat&type=1">
                        Máy tính
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <ul class="dropdown-menu">
                        <?php 
                        $condition_menu = " `loai` = '1' ";
                        $menu = $db->select('danh_muc','*',$condition_menu);
                         ?>
                         <?php foreach ($menu as $sub): ?>
                           <li><a href="index.php?page=cat&type=1&id=<?php echo $sub['id'] ?>"><?php echo $sub['ten'] ?></a></li>
                         <?php endforeach; ?>
                      </ul>
                      <!-- END DROPDOWN MENU -->
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="index.php?page=cat&type=2">
                        Linh kiện điện tử
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <ul class="dropdown-menu">
                        <?php 
                        $condition_menu = " `loai` = '2' ";
                        $menu = $db->select('danh_muc','*',$condition_menu);
                         ?>
                         <?php foreach ($menu as $sub): ?>
                           <li><a href="index.php?page=cat&type=2&id=<?php echo $sub['id'] ?>"><?php echo $sub['ten'] ?></a></li>
                         <?php endforeach; ?>
                      </ul>
                      <!-- END DROPDOWN MENU -->
                    </li>
                    <li><a href="index.php?page=web">Giới thiệu trang web</a></li>
                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="index.php?page=cat" method="post">
                                <div class="input-group">
                                    <input type="text" placeholder="Tìm kiếm" name="find" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                                    </span>
                                </div>
                            </form>
                        </div> 
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
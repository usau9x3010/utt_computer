<?php 
$info = $_SESSION['web_info'];
$cus  = isset($_SESSION['cus'])?1:0;
 ?>
<div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>
                            <?php echo $info['sdt'] ?></span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="index.php?page=checkout">Thanh toán</a></li>
                        <li><a href="index.php?page=<?php echo ($cus==0?'login':'logout') ?>"><?php echo ($cus==0?'Đăng nhập':'Đăng Xuất') ?></a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
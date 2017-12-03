<?php 
require_once "config/cnn.php";
  $db  =  new Connect();
  $type = isset($_GET['type'])?$_GET['type']:0;
  $id = isset($_GET['id'])?$_GET['id']:0;
  $p = isset($_GET['p'])?$_GET['p']:0;

 ?>
<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Trang chủ</a></li>
            <li class="active"><?php echo  ($type==1?'Máy tính':($type==0?'':'Linh kiện điện tử')) ?></li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <?php require_once "php/sitebar.php" ?>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <!-- BEGIN PRODUCT LIST -->
            <div class="row product-list">
                  <?php 
                      $condition = ' `trang_thai` = 0 AND `sl` >0 ';
                      if ($type!=0) {
                       $condition.= " AND `loai_sp` ='".$type."'";
                       $condition.=" AND `id` IN ( SELECT `sp_id` FROM `dm_sp`  WHERE `dm_id`='".$id."')";
                      }
                      if (isset($_POST) && !empty($_POST)) {
                        if(isset($_POST['from']) && $_POST['from']!='') $condition.= " AND ((`gia_km` !=0 AND  `gia_km` >='".$_POST['from']."') OR (`gia_km` =0 AND  `gia` >='".$_POST['from']."')) ";
                        if(isset($_POST['to']) &&$_POST['to']!='' ) $condition.= " AND ((`gia_km` !=0 AND  `gia_km` >='".$_POST['to']."') OR (`gia_km` =0 AND  `gia` >='".$_POST['to']."') )";
                         if(isset($_POST['find'])&& $_POST['find']!='' ) $condition.= " AND (ten_sp LIKE '%".$_POST['find']."%')";
                      }
                      $limit = $p.',9';
                      $pros = $db->select('san_pham','*',$condition,$limit);
                   ?>
                   <?php 
                   if (count($pros)==0) {
                     echo '<h2>Không có danh sách nào</h2>';
                   }
                    ?>
                   <?php foreach ($pros as $key => $pro): ?>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                     <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="<?php echo $pro['anh'] ?>" class="img-responsive" alt="<?php echo $pro['ten_sp'] ?>">
                      <div>
                         <a href="<?php echo $pro['anh'] ?>" class="btn btn-default fancybox-button">Phóng to</a>
                      </div>
                    </div>
                    <h3><a href="index.php?page=product&id=<?php echo $pro['id']?>"><?php echo $pro['ten_sp'] ?></a></h3>
                    <div class="pi-price">
                      <?php
                       $gia = (float)$pro['gia'];
                       $sale = false;
                      if ((float)$pro['gia_km'] != 0 && (float)$pro['gia_km']<(float)$pro['gia']) {
                        $gia = (float)$pro['gia_km'];
                        $sale = true;
                      }
                       ?>
                      <?php echo $gia ?>VNĐ</div>
                    <a href="" class="btn btn-default add2cart" onclick="return false" id="<?php echo $pro['id'] ?>">Mua</a>
                    <?php if ($sale): ?>
                      <div class="sticker sticker-sale"></div>
                    <?php endif ?>
                  </div>
                  </div>
                   <?php endforeach ?>
                   <?php if (count($pros)!=0): ?>
                     <div class="row">
                  <div class="col-md-8 col-sm-8">
                    <ul class="pagination pull-right">
                      <?php if ($p!=0): ?>
                         <li><a href="index.php?page=cat&type=<?php echo $type ?>&id=<?php echo $id ?>&p=<?php echo $p-1 ?>"><?php echo $p ?></a></li>
                      <?php endif ?>
                      <li><a href="index.php?page=cat&type=<?php echo $type ?>&id=<?php echo $id ?>&p=<?php echo $p ?>"><?php echo $p+1 ?></a></li>
                      <li><a href="index.php?page=cat&type=<?php echo $type ?>&id=<?php echo $id ?>&p=<?php echo $p+1 ?>"><?php echo $p+2 ?></a></li>
                      <?php if ($p==0): ?>
                        <li><a href="index.php?page=cat&type=<?php echo $type ?>&id=<?php echo $id ?>&p=<?php echo $p+2 ?>"><?php echo $p+3 ?></a></li>
                      <?php endif ?>
                    </ul>
                  </div>
            </div>
                   <?php endif ?>
                
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
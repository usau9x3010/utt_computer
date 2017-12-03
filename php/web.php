<?php 
require_once "config/cnn.php";
$db = new Connect();
$data = $db->select('cau_hinh');
 if (count($data) != 0) {
        $data = $data[0];
    }

 ?>
<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Trang chủ</a></li>
            <li class="active">Thông tin</li>
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
              <p>Tên cửa hàng: <?php echo $data['tieu_de'] ?> </p>
              <p> Giới thiệu</p>
              <p><?php echo htmlspecialchars_decode($data['mo_ta']) ?></p>
              <p>Địa chỉ: <?php echo $data['dia_chi'] ?></p>
              <p>Số điện thoại: <?php echo $data['sdt'] ?></p>
              <p>Email: <?php echo $data['email'] ?></p>
                
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
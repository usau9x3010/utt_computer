<?php 
require_once "config/cnn.php";
  $db  =  new Connect();
  $id = isset($_GET['id'])?$_GET['id']:0;
  $condition='';
if ($id) {
  $condition = " `id` = '{$id}'";
}
  $data = $db->select('san_pham','*',$condition);
    if (count($data) != 0) {
        $data = $data[0];
    }
 $gia = (float)$data['gia'];

   $sale = false;
  if ((float)$data['gia_km'] != 0 && (float)$data['gia_km']<(float)$data['gia']) {
    $gia = (float)$data['gia_km'];
    $sale = true;
  }
 ?>
<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href=""><?php echo ($data['loai_sp']==1?'Máy tính':'Linh kiện điện tử') ?></a></li>
            <li class="active"><?php echo $data['ten_sp'] ?></li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <?php require_once "php/sitebar.php" ?>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="<?php echo $data['anh'] ?>" alt="<?php echo $data['ten_sp'] ?>" class="img-responsive" data-BigImgSrc="<?php echo $data['anh'] ?>">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?php echo $data['ten_sp'] ?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><?php echo $gia ?><span>VNĐ</span></strong>
                      <?php if ($sale): ?>
                        <em><span><?php echo $data['gia'] ?></span>VNĐ</em>
                      <?php endif ?>
                    </div>
                    <div class="availability">
                      Trạng thái: <strong><?php echo $data['sl']>0?'Còn hàng':'Hết hàng' ?></strong>
                    </div>
                  </div>
                  <div class="description">
                    <?php echo htmlspecialchars_decode($data['mo_ta']) ?>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary addtocart" id="<?php echo $data['id'] ?>" type="button">Mua</button>
                  </div>
                </div>

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#Description" data-toggle="tab">Mô tả</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade  in active" id="Description">
                      <?php echo htmlspecialchars_decode($data['mo_ta']) ?>
                    </div>
                  </div>
                </div>
                <?php if ($sale): ?>
                  
                <div class="sticker sticker-sale"></div>
                <?php endif ?>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
    
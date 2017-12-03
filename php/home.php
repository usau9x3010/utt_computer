<?php 
include "php/slide.php";
 ?>
 <?php 
require_once "config/cnn.php";
  $db  =  new Connect();
  $condition = ' `trang_thai` = 0 AND `sl` >0 order by id desc';
  $pro_new = $db->select('san_pham','*',$condition,5);
  $condition = " `trang_thai` = '0' AND `gia_km` != '0' AND `gia_km` IS NOT NULL AND `gia_km` < `san_pham`.`gia` &&  `sl` >0  order by id desc";
  $pro_sale = $db->select('san_pham','*',$condition,5);
  ?>
<div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Sản phẩm mới</h2>
            <div class="bxslider-wrapper">
              <ul class="bxslider" data-slides-phone="1" data-slides-tablet="2" data-slides-desktop="5" data-slide-margin="15">
                <?php foreach ($pro_new as $pro): ?>
                <li>
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
                    <div class="sticker sticker-new"></div>
                  </div>
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Sản phẩm khuyến mãi</h2>
            <div class="bxslider-wrapper">
              <ul class="bxslider" data-slides-phone="1" data-slides-tablet="2" data-slides-desktop="5" data-slide-margin="15">
                <?php foreach ($pro_sale as $pro): ?>
                <li>
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
                       $new = false;
                      if ((float)$pro['gia_km'] != 0 && (float)$pro['gia_km']<(float)$pro['gia']) {
                        $gia = (float)$pro['gia_km'];
                        $new = true;
                      }
                       ?>
                      <?php echo $gia ?>VNĐ</div>
                    <a href="" class="btn btn-default add2cart" onclick="return false" id="<?php echo $pro['id'] ?>">Mua</a>
                    <?php if ($new): ?>
                      <div class="sticker sticker-new"></div>
                    <?php endif ?>
                    <div class="sticker sticker-sale"></div>
                  </div>
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>

      </div>
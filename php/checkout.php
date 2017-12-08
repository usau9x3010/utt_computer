  <?php 

if(!isset($_SESSION['cus']) || empty($_SESSION['cus']))  echo '<script>window.location.href = "index.php?page=login"</script>';
if(!isset($_SESSION['cart']) || empty($_SESSION['cart']))  echo '<script>window.location.href = "index.php"</script>';

$cus = $_SESSION['cus'];
$cart = $_SESSION['cart'];
if (isset($_POST) && !empty($_POST)) {
  require_once "config/cnn.php";
  $db  =  new Connect();
  $post_data = $_POST;
  $post_data['tong'] = $cart['total'];
  $post_data['ngay_tao'] = date("Y-m-d");
  $db->insert('don_hang', $post_data);
  $id_dh =  $db->getlastid();
  foreach ($cart as $key => $value) {
    if ($key=='total' || $key=='qty_total' ) 
      continue;
      $data_ct =array();
      $data_ct['id_dh'] = $id_dh;
      $data_ct['sku'] = $value['sku'];
      $data_ct['id_sp'] = $key;
      $data_ct['sl'] = $value['qty'];
      $data_ct['tong'] = $value['row_total'];
      $data_ct['gia'] = $value['price'];
      if ($db->insert('ct_don_hang', $data_ct)) {
         $con_update = " `id` = '{$key}'";
         $sl = $db->select('san_pham','*',$con_update)[0]['sl'];
          $sl = $sl - $value['qty'];
          $db->update('san_pham',array('sl'=>$sl),$con_update);
      }
    
  }
  unset($_SESSION['cart']);
  echo '<script>window.location.href = "index.php?page=success"</script>';
}
   ?>
  <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="">Cửa hàng</a></li>
            <li class="active">Thanh toán</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Thanh toán</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">
              <!-- BEGIN SHIPPING ADDRESS -->
              <div id="shipping-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content" class="accordion-toggle">
                      Thông tin giao hàng
                    </a>
                  </h2>
                </div>
                <form action="" method="post" id="ad_ship" >
                <div id="shipping-address-content" class="panel-collapse collapse in">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="firstname-dd">Tên<span class="require">*</span></label>
                        <input type="text" id="firstname-dd" name="ten_kh" value="<?php echo $cus['ten'] ?>" class="form-control">
                        <input type="hidden" name="kh_id" value="<?php echo $cus['id'] ?>">
                      </div>
                    
                      <div class="form-group">
                        <label for="email-dd">E-Mail <span class="require">*</span></label>
                        <input type="text" id="email-dd" value="<?php echo $cus['email'] ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email-dd">Lời nhắn <span class="require">*</span></label>
                        <textarea type="textarea" id="" name="loi_nhan" class="form-control"></textarea>
                   
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="address1-dd">Địa chị</label>
                        <input type="text" value="<?php echo $cus['diachi'] ?>" id="address1-dd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="address2-dd">Số điện thoại</label>
                        <input type="text" id="address2-dd" value="<?php echo $cus['sdt'] ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="city-dd">Địa chỉ giao hàng <span class="require">*</span></label>
                        <p style="color:red" id="ship_msg"></p>
                        <textarea id="ship-check-dd" class="form-control " requied name="dc_giaohang">
                          
                        </textarea>
                        
                      </div>
                      
                    </div>
                    <div class="col-md-12">
                      <button class="btn btn-primary  pull-right ship_ad" type="button" id="button-shipping-address" data-toggle="collapse" data-parent="#checkout-page" data-target="#confirm-content">Tiếp tục</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>

              <!-- BEGIN CONFIRM -->
              <div id="confirm" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#confirm-content" class="accordion-toggle">
                      Xác nhận đơn hàng
                    </a>
                  </h2>
                </div>
                <div id="confirm-content" class="panel-collapse collapse">
                  <div class="panel-body row">
                    <div class="col-md-12 clearfix">
                      <div class="table-wrapper-responsive">
                      <table>
                        <tr>
                          <th class="checkout-image">Ảnh</th>
                          <th class="checkout-description">Sản phẩm</th>
                          <th class="checkout-quantity">Số lượng</th>
                          <th class="checkout-price">Giá</th>
                          <th class="checkout-total">Tổng</th>
                        </tr>
                        <?php foreach ($cart as $key => $value): ?>
                           <?php if ($key=='total' || $key=='qty_total' ) {
                            continue;
                          } ?>
                          <tr>
                            <td class="checkout-image">
                              <a href="index.php?page=product&id=<?php echo $key ?>"><img src="<?php echo $value['img'] ?>" alt="<?php echo $value['ten'] ?>"></a>
                            </td>
                            <td class="checkout-description">
                              <h3><a href="index.php?page=product&id=<?php echo $key ?>"><?php echo $value['ten'] ?></a></h3>
                              <p><strong><?php echo $value['sku'] ?></strong></p>
                            </td>
                            <td class="checkout-quantity"><?php echo $value['qty'] ?></td>
                            <td class="checkout-price"><strong><span><?php echo $value['price'] ?></span>VNĐ</strong></td>
                            <td class="checkout-total"><strong><span><?php echo $value['row_total'] ?></span>VNĐ</strong></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                      </div>
                      <div class="checkout-total-block">
                        <ul>
                          <li>
                      <em>Tổng</em>
                      <strong class="price"><span><?php echo $cart['total'] ?></span>VNĐ</strong>
                    </li>
                        </ul>
                      </div>
                      <div class="clearfix"></div>
                      <button class="btn btn-primary pull-right" type="button" id="button-confirm">Xác nhận đơn hàng</button>
                      <a href="index.php" class="btn btn-default pull-right margin-right-20">Hủy</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONFIRM -->
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
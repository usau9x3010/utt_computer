<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Giỏ hàng</h1>
            <div class="shopping-cart-page">
              <div class="shopping-cart-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tr>
                    <th class="shopping-cart-image">Ảnh</th>
                    <th class="shopping-cart-description">Sản phẩm</th>
                    <th class="shopping-cart-quantity">Số lượng</th>
                    <th class="shopping-cart-price">Giá</th>
                    <th class="shopping-cart-total" colspan="2">Tổng</th>
                  </tr>
                 
                    <?php 
                    $cart = $_SESSION['cart'];
                     ?>
                     <?php foreach ($cart as $key => $value): ?>
                      <?php if ($key=='total' || $key=='qty_total' ) {
                        continue;
                      } ?>
                      <tr>
                       <td class="shopping-cart-image">
                          <a href="index.php?page=product&id=<?php echo $key ?>"><img src="<?php echo $value['img'] ?>" alt="<?php echo $value['ten'] ?>"></a>
                        </td>
                      <td class="shopping-cart-description">
                        <h3><a href="index.php?page=product&id=<?php echo $key ?>"><?php echo $value['ten'] ?></a></h3>
                        <p><strong><?php echo $value['sku'] ?></strong></p>
                      </td>
                      <td class="shopping-cart-quantity">
                        <div class="product-quantity">
                            <input id="product-quantity" type="text" value="<?php echo $value['qty'] ?>" readonly class="form-control input-sm">
                        </div>
                      </td>
                       <td class="shopping-cart-price">
                        <strong><span><?php echo $value['price'] ?></span>VNĐ</strong>
                      </td>
                      <td class="shopping-cart-total">
                        <strong><span><?php echo $value['row_total'] ?></span>VNĐ</strong>
                      </td>
                      <td class="del-goods-col">
                      <a class="del-goods" href="#" id="<?php echo $key ?>"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                     <?php endforeach; ?>
                    
                    
                    
                </table>
                </div>

                <div class="shopping-total">
                  <ul>
                    <li>
                      <em>Tổng</em>
                      <strong class="price"><span><?php echo $cart['total'] ?></span>VNĐ</strong>
                    </li>
                  </ul>
                </div>
              </div>
              <a class="btn btn-default" href="index.php">Tiếp tục mua sắp <i class="fa fa-shopping-cart"></i></a>
              <a class="btn btn-primary" href="index.php?page=checkout" type="submit">Thanh toán <i class="fa fa-check"></i></a>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->


      </div>
    </div>
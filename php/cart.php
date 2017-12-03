<?php
if(isset($_SESSION['cart'])){
  $cart =  isset($_SESSION['cart'])?$_SESSION['cart']:'';
  $qty = $cart['qty_total'];
  $price=$cart['total'];
}else{
  $qty=0;
  $price=0;
}

?>
<div class="cart-block">
    <div class="cart-info">
        <a href="javascript:void(0);" class="cart-info-count"><?php echo $qty ?> sản phẩm</a>
        <a href="javascript:void(0);" class="cart-info-value"><?php echo $price ?>VND</a>
    </div>
    <i class="fa fa-shopping-cart"></i>
    <!-- BEGIN CART CONTENT -->
    <?php if ($qty!=0): ?>
       <div class="cart-content-wrapper">
      <div class="cart-content">
        <ul>
          <?php foreach ($cart  as $key=>$value): ?>
            <?php 
              if ($key=='total' || $key=='qty_total' ) {
              continue;
            }
             ?>
            <li>
            <a href="index.php?page=product&id=<?php echo $key ?>"><img src="<?php echo $value['img'] ?>" alt="<?php echo $value['ten'] ?>" width="37" height="34"></a>
            <span class="cart-content-count">x <?php echo $value['qty'] ?></span>
            <strong><a href="index.php?page=product&id=<?php echo $key ?>"><?php echo $value['ten'] ?></a></strong>
            <em><?php echo $value['price']  ?>VND</em>
            <a href=""  onclick="return false" class="del-goods" id="<?php echo $key ?>"><i class="fa fa-times"></i></a>
          </li>
          <?php endforeach ?>
        </ul>
        <div class="text-right">
          <a href="index.php?page=shop_cart" class="btn btn-default">Giỏ hàng</a>
          <a href="index.php?page=checkout" class="btn btn-primary">Thanh toán</a>
        </div>
      </div>
    </div>
    <?php endif ?>
   
    <!-- END CART CONTENT -->
</div>
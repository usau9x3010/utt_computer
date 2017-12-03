<?php
session_start();
require_once "../config/cnn.php";
	$id = $_POST['id'];
  	$db  =  new Connect();
  	$condition = " `trang_thai` = 0 && `sl` >0  && `id` ='{$id}'";
  	$pro = $db->select('san_pham','*',$condition);
  	$re =array();
  	if (count($pro)) {
		$pro=$pro[0];
		$re['msg']='';
	if(isset($_SESSION['cart'][$id]))
	 {
	 	$qty = $_SESSION['cart'][$id]['qty'];
	 	$check = $qty + 1;
	 	if ($qty + 1>$pro['sl']) {
	 		$re['msg'] = "Vượt quá số lượng trong kho";
	 		
	 	}else{
	 		$_SESSION['cart'][$id]['qty'] = $qty + 1;
	 	}
	 	
	 }else{
	 	$_SESSION['cart'][$id]['qty'] = 1;
	 	$_SESSION['cart'][$id]['ten'] = $pro['ten_sp'];
	 	$_SESSION['cart'][$id]['sku'] = $pro['sku'];
	 	$_SESSION['cart'][$id]['img'] = $pro['anh'];
	 	$gia = (float)$pro['gia'];
         if ((float)$pro['gia_km'] != 0 && (float)$pro['gia_km']<(float)$pro['gia']) {
           $gia = (float)$pro['gia_km'];
         }
	 	$_SESSION['cart'][$id]['price'] = $gia;
	 }
	 if (isset($_POST['qty'])) {
	 	$_SESSION['cart'][$id]['qty'] = $_POST['qty'];
	 }
	 	$total_tmp = 0;
		$qty_temp = 0;
		$row_tt = array();
		$total_temp = array();
	 	foreach ($_SESSION['cart'] as $key=>$tol) {
			if ($key=='total' || $key=='qty_total' ) {
				continue;
			}
			$qty_temp += $tol['qty'];
			$row_total = $tol['qty'] *$tol['price'];

			$total_temp[$key]['qty'] = $tol['qty'];
		 	$total_temp[$key]['ten'] = $tol['ten'];
		 	$total_temp[$key]['sku'] = $tol['sku'];
		 	$total_temp[$key]['img'] = $tol['img'];
		 	$total_temp[$key]['price'] = $tol['price'];
			$total_temp[$key]['row_total'] = $row_total;
			$total_tmp+= $row_total;
		}

		
		$total_temp['total'] = $total_tmp;
		$total_temp['qty_total'] = $qty_temp;
		$_SESSION['cart'] = $total_temp;

	}else{
		$re['msg'] = "Sản phẩm chưa đc bật hoặc hêt hàng"; 
	}	
 
echo json_encode($re);
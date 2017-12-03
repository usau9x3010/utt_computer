<?php
session_start();
	$id = $_POST['id'];
unset($_SESSION['cart'][$id]);
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
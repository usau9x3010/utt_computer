<?php
include "../../config/cnn.php";
$db = new Connect();
$records = array();
if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action") {
  if(isset($_REQUEST["sGroupActionName"]) && $_REQUEST["sGroupActionName"] == "del"){
    $id = '('.implode(",", $_REQUEST["id"]).')';
    $id = '`id` in '.$id;
    $db->delete('don_hang',$id);
    $records["sStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
    $records["sMessage"] = "Xóa thành công"; // pass custom message(useful for getting status of group actions)
  }
} 
$condition ='';
if (isset($_REQUEST["search"])) {
  $search_f =array();
  foreach ($_REQUEST["search"] as $col => $value) {
    if ($value!='') {
      $search_f[] = "`{$col}` LIKE '%{$value}%'";
    }
  }
  $condition = implode(" AND ", $search_f);
}
$data = $db->select('don_hang');
$iTotalRecords = count($data); // tong dong
$iDisplayLength = intval($_REQUEST['iDisplayLength']); // so dong hien thi
$iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
$iDisplayStart = intval($_REQUEST['iDisplayStart']); // bat dau tu dong
$sEcho = intval($_REQUEST['sEcho']); // page
$limit = ' '.$iDisplayStart.','.' '.$iDisplayLength;
$data = $db->select('don_hang','*',$condition,$limit);

$records["aaData"] = array(); 
$end = $iDisplayStart + $iDisplayLength;
$end = $end > $iTotalRecords ? $iTotalRecords : $end;
$i = $iDisplayStart;
$cung_cap =array(
0=>'Chờ duyệt',
1=>'Đã gửi',
2=>'Hoàn thành',
3=>'Hủy'
);
foreach ($data as $key => $row) {
  $cc_text =$cung_cap[$row['tt']];
 // die;
  $records["aaData"][] = array(
      '<input type="checkbox" name="id[]" value="'.$row['id'].'">',
      $row['id'],
      $row['ten_kh'],
      $row['tong'],
      $row['dc_giaohang'],
      date("d-m-Y",strtotime($row['ngay_tao'])),
      $row['loi_nhan'],
      $cc_text,
      '<a href="home.php?page=order_action&action=edit&id='.$row['id'].'" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i>Sửa</a>
      ',
    );
}
  $records["sEcho"] = $sEcho;
  $records["iTotalRecords"] = $iTotalRecords;
  $records["iTotalDisplayRecords"] = $iTotalRecords;
  echo json_encode($records);
?>
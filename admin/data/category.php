<?php
include "../../config/cnn.php";
$db = new Connect();
$records = array();
if (isset($_REQUEST["sAction"]) && $_REQUEST["sAction"] == "group_action") {
  if(isset($_REQUEST["sGroupActionName"]) && $_REQUEST["sGroupActionName"] == "del"){
    $id = '('.implode(",", $_REQUEST["id"]).')';
    $id = '`id` in '.$id;
    $db->delete('danh_muc',$id);
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
$data = $db->select('danh_muc');
$iTotalRecords = count($data); // tong dong
$iDisplayLength = intval($_REQUEST['iDisplayLength']); // so dong hien thi
$iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
$iDisplayStart = intval($_REQUEST['iDisplayStart']); // bat dau tu dong
$sEcho = intval($_REQUEST['sEcho']); // page
$limit = ' '.$iDisplayStart.','.' '.$iDisplayLength;
$data = $db->select('danh_muc','*',$condition,$limit);

$records["aaData"] = array(); 
$end = $iDisplayStart + $iDisplayLength;
$end = $end > $iTotalRecords ? $iTotalRecords : $end;
$i = $iDisplayStart;
$cung_cap =array(
1=>'Máy tính',
2=>'Linh kiện điện tử'
);

foreach ($data as $key => $row) {
  $cc_text =$cung_cap[$row['loai']];

  $records["aaData"][] = array(
      '<input type="checkbox" name="id[]" value="'.$row['id'].'">',
      $row['id'],
      $row['ten'],
      $cc_text,
      '<a href="home.php?page=category_action&action=edit&id='.$row['id'].'" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i>Sửa</a>
      <a onclick="return confirm(\'Bạn chắc chắn xóa?\')" href="home.php?page=category_action&action=del&id='.$row['id'].'" class="btn btn-xs default btn-editable"><i class="fa fa-times"></i>Xóa</a>',
    );
}
  $records["sEcho"] = $sEcho;
  $records["iTotalRecords"] = $iTotalRecords;
  $records["iTotalDisplayRecords"] = $iTotalRecords;
  echo json_encode($records);
?>
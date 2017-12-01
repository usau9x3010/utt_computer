<?php
include "../../config/cnn.php";
$db = new Connect();
$records = array();
$type = $_POST['type'];
$id = $_POST['id'];
$con_ncc = " `loai` LIKE '%{$type}%'";
$nccs = $db->select('ncc','*',$con_ncc);
$ncc_str = '';
foreach ($nccs as $key => $ncc) {
	$ncc_str .='<option value="'.$ncc['id'].'">'.$ncc['ten'].'</option>';
}
$cat_str = '';
$con_dm = " `loai` = '{$type}'";
$cats = $db->select('danh_muc','*',$con_dm);


$condm_sp = " `sp_id` = '".$id."'";
$cat_chec = array();
$cat_ss = $db->select('dm_sp','*',$condm_sp);
foreach ($cat_ss as $key => $value) {
	$cat_chec[] = $value['dm_id']; 
}


foreach ($cats as $key => $cat) {
	$cat_str .='<li><label><input type="checkbox" name="cat[]" value="'.$cat['id'].'" '.(in_array($cat['id'], $cat_chec)?"checked":'').'>'.$cat['ten'].'</label></li>';
}
$records['ncc'] = $ncc_str;
$records['cat'] = $cat_str;
header("Content-Type: application/json", true);

echo json_encode($records);
?>
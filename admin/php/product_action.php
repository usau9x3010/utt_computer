<?php
include "../config/cnn.php";
$db = new Connect();
$id = isset($_GET['id'])?$_GET['id']:false;
$condition='';
if ($id) {
	$condition = " `id` = '{$id}'";
}
if(isset($_GET['action']) && $_GET['action']=='del'){
    $db->delete('san_pham',$condition);
    echo '<script>window.location.href = "home.php?page=product&action=1"</script>';
}
if ($_POST) {
    $data_post = $_POST;
    $cats = $data_post['cat'];
    unset($data_post['cat']);
    if ($_FILES['anh']['name'] != NULL) {
        $path = "../img/product/";
        $tmp_name = $_FILES['anh']['tmp_name'];
        $name = $_FILES['anh']['name'];
        $type_img = explode(".", $name)[1];
        $new_name = trim($_POST['sku']).'.' . $type_img;
        if (file_exists($path . $new_name)) {
            unlink($path . $new_name);
        }
        move_uploaded_file($tmp_name, $path . $new_name);
        $data_post['anh'] = $path . $new_name;
    }
    // var_dump($data_post);die;
    if ($id) {
        $db->update('san_pham', $data_post,$condition);
       updateCat($cats,$id,$db);
    } else {
        $db->insert('san_pham', $data_post);
        $id_cat = $db->getlastid();
        updateCat($cats,$id_cat,$db);
    }
    echo '<script>window.location.href = "home.php?page=product&action=1"</script>';

}
$data =array();
if($condition!=''){
    $data = $db->select('san_pham','*',$condition);
    if (count($data) != 0) {
        $data = $data[0];
    }
}
function updateCat($cats,$product_id,$db){
    $condition = " `sp_id` = '{$product_id}'";
    $db->delete('dm_sp',$condition);
    foreach ($cats as $cat) {
        $data =array('dm_id'=>$cat,'sp_id'=>$product_id);
        $db->insert('dm_sp', $data);
    }
}
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
        
                    <small>Sản phẩm</small>
                </h3>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.php">
                            Trang chủ
                        </a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            Quản lý Sản phẩm
                        </a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            Sản phẩm
                        </a>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal form-row-seperated" action="home.php?page=product_action&action=edit&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-shopping-cart"></i>Thông tin Sản phẩm
                            </div>
                            <div class="actions btn-set">
                                <button type="button" name="back" class="btn default"><i class="fa fa-angle-left"></i>
                                    Trở lại
                                </button>
                                <button class="btn default"><i class="fa fa-reply"></i> Làm mới</button>
                                <button class="btn green"><i class="fa fa-check"></i> Lưu</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_general" data-toggle="tab">
                                            Thông tin Sản phẩm
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content no-space">
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tên Sản phẩm:
                                                    <span class="required">
														 *
													</span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ten_sp" placeholder=""
                                                           value="<?php echo(count($data) ? $data['ten_sp'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập tên Sản phẩm')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Mã Sản phẩm:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="sku" placeholder=""
                                                           value="<?php echo(count($data) ? $data['sku'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập mã Sản phẩm')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Giá Sản phẩm:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="gia" placeholder=""
                                                           value="<?php echo(count($data) ? $data['gia'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập giá Sản phẩm')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Ảnh:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control" name="anh" placeholder=""
                                                           accept="image/*"
                                                           oninvalid="this.setCustomValidity('Xin mời chọn ảnh')"
                                                           oninput="setCustomValidity('')">
                                                    <span class="help-block">
                                                            <a href="<?php echo $data['anh'] ?>"
                                                               class="fancybox-button" data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="<?php echo $data['anh'] ?>" alt=""
                                                                     style="width: 100px">
                                                            </a>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Giá khuyễn mãi Sản phẩm:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="gia_km" placeholder=""
                                                           value="<?php echo(count($data) ? $data['gia_km'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập điền đúng thông tin')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Mô tả Sản phẩm:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="mo_ta" placeholder=""
                                                           value="<?php echo(count($data) ? $data['mo_ta'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập mô tả Sản phẩm')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Số lượng Sản phẩm:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="sl" placeholder=""
                                                           value="<?php echo(count($data) ? $data['sl'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập số lượng Sản phẩm')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php 
                                                $checked[1] ="checked";
                                                if(count($data)){
                                                    $check_box =array($data['trang_thai']);
                                                    $checked  = array();
                                                    $checked[1] ='';
                                                    $checked[2] ='';
                                                    if (in_array(1, $check_box)) {
                                                        $checked[1] ="checked";
                                                    }
                                                    if (in_array(2, $check_box)) {
                                                        $checked[2] ="checked";
                                                    }

                                                }
                                                 ?> 
                                                <label class="col-md-2 control-label">Trạng thái:
                                                </label>
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                    <input type="radio" name="trang_thai" value="0" <?php echo $checked[1] ?> >Bật</label>
                                                    <label class="radio-inline">
                                                    <input type="radio" name="trang_thai" value="1" <?php echo(count($data) ? $checked[2] : '') ?> > Tắt </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            	<?php 
                                                $checked[1] ="checked";
                                               	if(count($data)){
                                               		$check_box =array($data['loai_sp']);
                                               		$checked  = array();
                                               		$checked[1] ='';
                                               		$checked[2] ='';
                                               		if (in_array(1, $check_box)) {
                                               			$checked[1] ="checked";
                                               		}
                                               		if (in_array(2, $check_box)) {
                                               			$checked[2] ="checked";
                                               		}

                                               	}
                                               	 ?> 
												<label class="col-md-2 control-label">Thể loại:
                                                </label>
												<div class="radio-list">
													<label class="radio-inline">
													<input type="radio" name="loai_sp" value="1" <?php echo $checked[1] ?> > Sản phẩm máy tính</label>
													<label class="radio-inline">
													<input type="radio" name="loai_sp" value="2" <?php echo (count($data) ? $checked[2] : '') ?> > Sản phẩm linh kiện điển tử </label>
												</div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Danh mục:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <div class="form-control height-auto">
                                                            <div class="scroller" style="height:275px;" data-always-visible="1">
                                                                <ul class="list-unstyled">
                                                                    <input type="hidden" id="sp_id" value="<?php echo $data['id'] ?>">
                                                                    <?php 
                                                                        $con_dm = " `loai` = '1'";
                                                                        if(count($data)) $con_dm = " `loai` = '".$data['loai_sp']."'";
                                                                        $cats = $db->select('danh_muc','*',$con_dm);
                                                                         
                                                                         $cat_chec = array();
                                                                         if(count($data)) 
                                                                         {
                                                                            $condm_sp = " `sp_id` = '".$data['id']."'";
                                                                            $cat_ss = $db->select('dm_sp','*',$condm_sp);
                                                                            foreach ($cat_ss as $key => $value) {
                                                                                $cat_chec[] = $value['dm_id']; 
                                                                            }
                                                                         }
                                                                            
                                                                    ?>
                                                                    <li>
                                                                        <ul class="list-unstyled" id="cat">
                                                                            <?php foreach ($cats as $key => $cat): ?>
                                                                                 <li>
                                                                                    <label><input type="checkbox" name="cat[]" value="<?php echo $cat['id'] ?>"
                                                                                        <?php if (in_array($cat['id'], $cat_chec)) {
                                                                                            echo "checked";
                                                                                        } ?>>
                                                                                        <?php echo $cat['ten'] ?></label>
                                                                                </li>
                                                                            <?php endforeach;?>
                                                                        
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nhà cung cấp:
                                                    <span class="required">
                                                         *
                                                    </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <select class="table-group-action-input form-control input-medium" 
                                                        required name="ncc_id" id="ncc"
                                                           oninvalid="this.setCustomValidity('Xin mời nhập mô tả Sản phẩm')"
                                                           oninput="setCustomValidity('')" >
                                                            <option value="">Chọn nhà cung cấp</option>
                                                            <?php 
                                                                $con_dm = " `loai` LIKE '%1%'";
                                                                if(count($data)) $con_dm = " `loai` LIKE '%".$data['loai_sp']."%'";
                                                                $nccs = $db->select('ncc','*',$con_dm);
                                                            ?>
                                                            <?php foreach ($nccs as $key => $ncc): ?>
                                                                <option value="<?php echo $ncc['id'] ?>" <?php echo  ((count($data) && $data['ncc_id']== $ncc['id'])  ? "selected" : '') ?>><?php echo $ncc['ten'] ?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>


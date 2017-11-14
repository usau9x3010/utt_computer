<?php
include "../config/cnn.php";
$db = new Connect();
$id = isset($_GET['id'])?isset($_GET['id']):false;
$id = 1;
$condition='';
if ($id) {
	$condition = " `id_ncc` = '{$id}'";
}
$data = $db->select('ncc');
if ($_POST) {
    $data_post = $_POST;
    $data_post['loai'] = implode("-", $data_post['loai']);
    if ($id) {
        $db->update('ncc', $data_post,$condition);
    } else {
        $db->insert('ncc', $data_post);
    }

}
$data = $db->select('ncc','*',$condition);
if (count($data) != 0) {
    $data = $data[0];
}
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Cấu hình
                    <small>thông tin website</small>
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
                            Cài đặt
                        </a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            Thông tin trang web
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
                <form class="form-horizontal form-row-seperated" action="" method="post">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-shopping-cart"></i>Thông tin nhà cung cấp
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
                                            Thông tin nhà cung cấp
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content no-space">
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tên nhà cung cấp:
                                                    <span class="required">
														 *
													</span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ten_ncc" placeholder=""
                                                           value="<?php echo(count($data) ? $data['ten_ncc'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập tên nhà cung cấp')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Địa chỉ
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="dia_chi" placeholder=""
                                                           value="<?php echo(count($data) ? $data['dia_chi'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập địa chỉ nhà cung cấp')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Số điện thoại:
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" name="sdt" class="form-control"
                                                           value="<?php echo(count($data) ? $data['sdt'] : '') ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Email:
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="email" name="email" class="form-control"
                                                           value="<?php echo(count($data) ? $data['email'] : '') ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            	<?php 
                                               	if(count($data)){
                                               		$check_box = explode("-", $data['loai']);
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
												<label class="col-md-2 control-label">Cung cấp:
                                                </label>
												<div class="checkbox-list">
													<label class="checkbox-inline">
													<input type="checkbox" name="loai[]" value="1" <?php echo(count($data) ? $checked[1] : '') ?> > Cung cấp máy tính</label>
													<label class="checkbox-inline">
													<input type="checkbox" name="loai[]" value="2" <?php echo(count($data) ? $checked[2] : '') ?> > Cung cấp linh kiện điển tử </label>
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

<script type="text/javascript">

</script>
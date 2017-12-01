<?php
include "../config/cnn.php";
$db = new Connect();
$id = isset($_GET['id'])?$_GET['id']:false;
$condition='';
if ($id) {
	$condition = " `id` = '{$id}'";
}
if(isset($_GET['action']) && $_GET['action']=='del'){
    $db->delete('khach_hang',$condition);
    echo '<script>window.location.href = "home.php?page=customer&action=1"</script>';
}
if ($_POST) {
    $data_post = $_POST;
     unset($data_post['mk']);
    if(isset($_POST['mk']) && trim($_POST['mk']) !=''){
        $data_post['mk'] = md5($_POST['mk']);

    }
    if ($id) {
        $db->update('khach_hang', $data_post,$condition);
    } else {
        $db->insert('khach_hang', $data_post);
    }
    echo '<script>window.location.href = "home.php?page=customer&action=1"</script>';

}
$data =array();
if($condition!=''){
    $data = $db->select('khach_hang','*',$condition);
    if (count($data) != 0) {
        $data = $data[0];
    }
}
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    <small>thông tin khách hàng</small>
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
                            Thông tin khách hàng
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
                <form class="form-horizontal form-row-seperated" action="home.php?page=customer_action&action=edit&id=<?php echo $id;?>" method="post">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-shopping-cart"></i>Thông tin customer
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
                                            Thông tin customer
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content no-space">
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tên khách hàng:
                                                    <span class="required">
														 *
													</span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ten" placeholder=""
                                                           value="<?php echo(count($data) ? $data['ten'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập tên customer')"
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
                                                <label class="col-md-2 control-label">Địa chỉ
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="diachi" placeholder=""
                                                           value="<?php echo(count($data) ? $data['diachi'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập địa chỉ customer')"
                                                           oninput="setCustomValidity('')">
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
                                                <label class="col-md-2 control-label">Mật khẩu:
                                                    </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="password" name="mk" class="form-control"
                                                           value="">
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
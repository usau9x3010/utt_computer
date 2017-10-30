<?php
include "../config/cnn.php";
$db = new Connect();
$data = $db->select('cau_hinh');
if ($_POST) {
    $data_post = $_POST;
    if ($_FILES['logo']['name'] != NULL) {
        $path = "../img/page/";
        $tmp_name = $_FILES['logo']['tmp_name'];
        $name = $_FILES['logo']['name'];
        $type_img = explode(".", $name)[1];
        $new_name = 'logo.' . $type_img;
        if (file_exists($path . $new_name)) {
            unlink($path . $new_name);
        }
        move_uploaded_file($tmp_name, $path . $new_name);
        $data_post['logo'] = $path . $new_name;
    }
    if (count($data) != 0) {
        $db->update('cau_hinh', $data_post);
    } else {
        $db->insert('cau_hinh', $data_post);
    }

}
$data = $db->select('cau_hinh');
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
                <form class="form-horizontal form-row-seperated" action="" method="post" enctype="multipart/form-data">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-shopping-cart"></i>Thông tin trang web
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
                                            Thông tin trang web
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content no-space">
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tiêu đề:
                                                    <span class="required">
														 *
													</span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="title" placeholder=""
                                                           value="<?php echo(count($data) ? $data['title'] : '') ?>"
                                                           required
                                                           oninvalid="this.setCustomValidity('Xin mời nhập tiêu đề trang web')"
                                                           oninput="setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Logo:
                                                    <span class="required">
														 *
													</span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control" name="logo" placeholder=""
                                                           accept="image/*" required
                                                           oninvalid="this.setCustomValidity('Xin mời chọn ảnh')"
                                                           oninput="setCustomValidity('')">
                                                    <span class="help-block">
															<a href="<?php echo $data['logo'] ?>"
                                                               class="fancybox-button" data-rel="fancybox-button">
																<img class="img-responsive"
                                                                     src="<?php echo $data['logo'] ?>" alt=""
                                                                     style="width: 100px">
															</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Thông tin công ty:
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control"
                                                              name="des"><?php echo(count($data) ? $data['des'] : '') ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Số điện thoại:
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" name="phone" class="form-control"
                                                           value="<?php echo(count($data) ? $data['phone'] : '') ?>">
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
                                                <label class="col-md-2 control-label">Địa chỉ:
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control"
                                                              name="address"><?php echo(count($data) ? $data['address'] : '') ?></textarea>
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
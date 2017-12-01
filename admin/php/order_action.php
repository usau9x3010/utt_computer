<?php
include "../config/cnn.php";
$db = new Connect();
$id = isset($_GET['id'])?$_GET['id']:false;
$condition='';
if ($id) {
	$condition = " `id` = '{$id}'";
}

if ($_POST) {
    $data_post = $_POST;
    $db->update('don_hang', $data_post,$condition);
    echo '<script>window.location.href = "home.php?page=order&action=1"</script>';

}
$data =array();
if($condition!=''){
    $order = $db->select('don_hang','*',$condition);
    if (count($order) != 0) {
        $order = $order[0];
    }
    $condition_info = " `id_dh` = '".$order['id']."'";
    $order_info= $db->select('ct_don_hang','*',$condition_info);
    $condition_info = " `id` = '".$order['kh_id']."'";

    $customer_info = $db->select('khach_hang','*',$condition_info);
    if (count($customer_info) != 0) {
        $customer_info = $customer_info[0];
    }
    // var_dump($customer_info);
}
function getProduct($id,$db){
    $condition = " `id` = '{$id}'";
    $data = $db->select('san_pham','*',$condition);
    if (count($data) != 0) {
        $data = $data[0];
    }
    return $data;
}
$cung_cap =array(
0=>'Chờ duyệt',
1=>'Đã gửi',
2=>'Hoàn thành',
3=>'Hủy'
);
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    <small>thông tin Đơn hàng</small>
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
                            Thông tin Đơn hàng
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
                    <!-- Begin: life time stats -->
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-shopping-cart"></i>Đơn hàng #<?php echo $order['id'] ?>
                                <span class="hidden-480">
                                     | <?php echo date("d-m-Y",strtotime($order['ngay_tao'])) ?>
                                </span>
                            </div>
                            <div class="actions">
                                <a href="#" class="btn default yellow-stripe">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="hidden-480">
                                         Trở vê
                                    </span>

                                </a>

                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs nav-tabs-lg">
                                    <li class="active">
                                        <a href="#tab_1" data-toggle="tab">
                                             Thông tin đơn hàng
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="portlet yellow box">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-cogs"></i>thông tin đơn hàng
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                 Đơn hàng #:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                 <?php echo $order['id'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                Ngày tạo:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                 <?php echo date("d-m-Y",strtotime($order['ngay_tao'])) ?>
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                 Trạng thái:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                <span class="label label-success">
                                                                     <?php echo $cung_cap[$order['tt']] ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                 Tổng giá:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                 <?php echo $order['tong'] ?>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6 col-sm-12">
                                                <div class="portlet blue box">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-cogs"></i>Thông tin khách hàng
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                 Khách hàng:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                 <?php echo $customer_info['ten'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                 Email:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                 <?php echo $customer_info['email'] ?>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                 SĐT:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                 <?php echo $customer_info['sdt'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="portlet red box">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-cogs"></i>Địa chỉ giao hàng
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row static-info">
                                                            <div class="col-md-12 value">
                                                                 <?php echo $order['dc_giaohang'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="portlet purple box">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-cogs"></i>Thông tin đơn hàng
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>
                                                                     Tên sản phẩm
                                                                </th>
                                                                <th>
                                                                     Mã sản phẩm
                                                                </th>
                                                                <th>
                                                                    Số lượng
                                                                </th>
                                                                <th>
                                                                     Giá
                                                                </th>
                                                                <th>
                                                                    Tổng
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($order_info as $value): ?>
                                                                    <?php
                                                                    $pro = getProduct($value['id_sp'],$db);
                                                                    ?>
                                                                <?php endforeach; ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#">
                                                                             <?php echo $pro['ten_sp'] ?>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $value['sku'] ?>
                                                                        </td>
                                                                        <td>
                                                                             <?php echo $value['sl'] ?>
                                                                        </td>
                                                                        <td>
                                                                             <?php echo $value['gia'] ?>
                                                                        </td>
                                                                        <td>
                                                                             <?php echo $value['tong'] ?>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                
                                                                            </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="home.php?page=order_action&action=edit&id=<?php echo $id ?>" method="post">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Update trạng thái
                                                            <span class="required">
                                                                 *
                                                            </span>
                                                            </label>
                                                            <div class="col-md-10">
                                                                <select class="table-group-action-input form-control input-medium" 
                                                                required name="tt" id="ncc"
                                                                   oninvalid="this.setCustomValidity('Xin mời nhập mô tả Sản phẩm')"
                                                                   oninput="setCustomValidity('')" >
                                                                    <option value="0">Chờ duyệt</option>
                                                                    <option value="1">Đã gửi</option>
                                                                    <option value="2">Hoàn thành</option>
                                                                    <option value="3">Hủy</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                        
                                                            <input type="submit" class="btn btn-primary" value="Thực hiện">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: life time stats -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                    <!-- END CONTENT -->
                </div>

    </div>
</div>

<script type="text/javascript">

</script>
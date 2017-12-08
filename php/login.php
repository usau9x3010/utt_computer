<?php 
require_once "config/cnn.php";
  $db  =  new Connect();
  $er='';
if(isset($_SESSION['cus']) && !empty($_SESSION['cus']))  echo '<script>window.location.href = "index.php"</script>';

 ?>
<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="">Cửa hàng</a></li>
            <li class="active">Đăng nhập</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Đăng nhập/Đăng ký</a></li>
 
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <p style="color: red" id="er_msg"></p>
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Đăng nhập</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal " role="form" action="index.php?page=web">
                    <div class="form-group">
                      <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" required class="form-control"  name="email" id="email_c">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Mật khẩu <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" required class="form-control" name="mk" id="mk_c">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0">
                        <a href="index.php?page=singup">Đăng ký</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <input  type="submit" class="btn btn-primary check_account" onclick="return false" value="Đăng nhập">
                      </div>
                    </div>
              
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
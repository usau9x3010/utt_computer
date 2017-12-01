<?php
session_start();

if(!isset($_SESSION['user'])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>

<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>

<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

<link rel="shortcut icon" href="favicon.ico"/>

</head>
<body class="page-header-fixed">
<?php require_once "php/header.php"; ?>
<div class="clearfix">
</div>
<div class="page-container">
	<?php require_once "php/sitebar.php"; ?>
<?php require_once "php/content.php"; ?>
</div>
<?php require_once "php/footer.php"; ?>
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/core/datatable.js"></script>
<script src="assets/scripts/custom/ecommerce-products.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   <?php $page = isset($_GET['page'])?$_GET['page']:'order';

   ?>
   <?php if($page=='supplier'): ?>
      EcommerceSupplier.init();
   <?php elseif ($page=='category'): ?>
      EcommerceCategory.init();
      <?php elseif ($page=='order'): ?>
      EcommerceOrder.init();
      <?php elseif ($page=='customer'): ?>
      EcommerceCustomer.init();
      <?php elseif ($page=='product'): ?>
      EcommerceProduct.init();
      <?php elseif ($page=='user'): ?>
      EcommerceUser.init();
   <?php endif;?>
});

</script>
<script type="text/javascript">
    $(document).ready(function($){
        $('input[type=radio][name=loai_sp]').change(function() {
            var type = $('input[name=loai_sp]:checked').val();
            var sp_id = $('#sp_id').val();
            $.ajax({
                method:"post",
                data:{type:type,id:sp_id},
                dateType: "json",
                url:"data/ajax.php",
                success:function(data){
                    if (data) {
                    	$("#ncc,#cat").empty();
                    	// console.log(data.ncc);
                    	$("#ncc").html(data.ncc);
                    	$("#cat").html(data.cat);
                    }
                }
            });
        });
    });
</script>
</body>
</html>
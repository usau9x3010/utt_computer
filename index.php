<?php 
session_start();
if(!isset($_SESSION['web_info']) ||  empty($_SESSION['web_info']))
{
	require_once "config/cnn.php";
	$db  =  new Connect();
	$data = $db->select('cau_hinh','*');
	if (count($data)) {
		$data= $data[0];
	}
	$_SESSION['web_info'] = $data;
}
$info = $_SESSION['web_info'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $info['tieu_de']; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="<?php echo $info['tieu_de']; ?> UI description" name="description">
  <meta content="<?php echo $info['tieu_de']; ?> UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="img/page/fav.ico">
  <link href="img/page/fav.ico" rel="SHORTCUT ICON" type="image/ico">
  <!-- Fonts START -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all' rel='stylesheet' type='text/css'>
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">              
  <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/layerslider/css/layerslider.css" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">  
  <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/computer.css">
</head>
<body>
<?php require_once "php/top.php";  ?>
<?php require_once "php/menu.php";  ?>
<?php require_once "php/content.php";  ?>
<?php require_once "php/footer.php";  ?>

 
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script><!-- pop up -->
    <script type="text/javascript" src="assets/plugins/bxslider/jquery.bxslider.min.js"></script><!-- slider for products -->
    <script type="text/javascript" src='assets/plugins/zoom/jquery.zoom.min.js'></script><!-- product zoom -->
    <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="assets/plugins/layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="assets/plugins/layerslider/jQuery/jquery-transit-modified.js" type="text/javascript"></script>
    <script src="assets/plugins/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="assets/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script type="text/javascript" src="assets/scripts/app.js"></script>
    <script type="text/javascript" src="assets/scripts/index.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initLayerSlider();
            App.initImageZoom();
            App.initTouchspin();
        });
    </script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$(".add2cart").click(function(){
    			var id = $(this).attr("id");
    			$.ajax({
    				method:"post",
    				data:{id:id},
    				dataType:'json',
    				url:'ajax/addcart.php',
    				success:function(data){
    					if(data.msg){
    						$.fancybox(
                    data.msg,
                    {
                            padding:15,
                            closeBtn:true
                    }
                );
    					}else{
                window.location.reload();
              }
    				}
    			});
          return false;
    		});
    		$(".del-goods").click(function(){
            var id = $(this).attr("id");
          $.ajax({
            method:"post",
            data:{id:id},
            dataType:'json',
            url:'ajax/delcart.php',
            success:function(data){
              if(data.msg){
                $.fancybox(
                    data.msg,
                    {
                            padding:15,
                            closeBtn:true
                    }
                );
              }else{
                window.location.reload();
              }
            }
          });
           window.location.reload();
          return false;
        });
$(".addtocart").click(function(){
            var id = $(this).attr("id");
            var qty = $("#product-quantity").val();
          $.ajax({
            method:"post",
            data:{id:id},
            dataType:'json',
            url:'ajax/addcart.php',
            success:function(data){
              if(data.msg){
                $.fancybox(
                    data.msg,
                    {
                            padding:15,
                            closeBtn:true
                    }
                );
              }else{
                window.location.reload();
              }
            }
          });
           // window.location.reload();
          return false;
        });

    $(".check_account").click(function(){
            var email = $("#email_c").val();
            var mk = $("#mk_c").val();
          $.ajax({
            method:"post",
            data:{email:email,mk:mk},
            // dataType:'json',
            url:'ajax/check_account.php',
            success:function(data){
              $("#er_msg").text(data);
              if(data=='')   window.location.reload();
            }
          });
           // window.location.reload();
          return false;
        });
    $(".check_sin").click(function(){
            var data = $("#signup").serialize();
          $.ajax({
            method:"post",
            data:data,
            // dataType:'json',
            url:'ajax/check_sin.php',
            success:function(data){
              $("#er_msg").text(data);
              // console.log(data);
              if(data=='')   window.location.reload();
            }
          });
          
          // return false;
        });
           
           
            $("#button-confirm").click(function(){
           
          $("#ad_ship").submit();
          // return false;
        });
    	});
      
 $(".ship_ad").click(function(){
            var data = $("#ship-check-dd").val();
            if(data.trim()==''){
               $("#ship_msg").text("Chưa nhập địa chỉ giao hàng");
               return false
            }else{
              $("#shipping-address-content").removeClass("in");
            }
            return true;

          
          // return false;
        });
           
    </script>
</body>
</html>
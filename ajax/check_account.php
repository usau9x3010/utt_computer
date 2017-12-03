<?php 
session_start();
require_once "../config/cnn.php";
  $db  =  new Connect();
  $er='';
// if(isset($_SESSION['cus']) && !empty($_SESSION['cus']))  echo '<script>window.location.href = "index.php"</script>';

  if(isset($_POST) && !empty($_POST)){
    $email= $_POST['email'];
    $mk= md5($_POST['mk']);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $er = "Mail ko chinh xac"; 
      }
    $condition = " `email` = '{$email}' AND `mk` ='{$mk}'";
    $data = $db->select('khach_hang','*',$condition);
    if(count($data) !=0 && $er==''){
      $_SESSION['cus']= $data[0];
    }else{
      $er = "Bạn nhập sai thông tin";
    }
  }
echo $er;

 ?>
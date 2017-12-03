<?php 
session_start();
require_once "../config/cnn.php";
  $db  =  new Connect();
  
// if(isset($_SESSION['cus']) && !empty($_SESSION['cus']))  echo '<script>window.location.href = "index.php"</script>';
$er='';
  if(isset($_POST) && !empty($_POST)){
    $email= $_POST['email'];
    $mk= md5($_POST['mk']);
    $condition = " `email` = '{$email}'";
    $data = $db->select('khach_hang','*',$condition);
    if(count($data) !=0){
       $er = "Tài khoản đã tồn tại";
    }else{
      foreach ($_POST as $key => $value) {
        if ($value=='') {
          $er='Bạn điền thiếu thông tin';
        }
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $er = "Mail ko chinh xac"; 
      }
      if ($er=='') {
        $data_post=$_POST;
        unset($data_post['mk']);
          if(isset($_POST['mk']) && trim($_POST['mk']) !=''){
              $data_post['mk'] = md5($_POST['mk']);

          }
          $db->insert('khach_hang', $data_post);
          $id = $db->getlastid();
          $data_post['id'] = $id;
          $_SESSION['cus']= $data_post;

      }
    }
  }

echo $er;

 ?>
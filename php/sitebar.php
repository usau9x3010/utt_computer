
<?php 
require_once "config/cnn.php";
  $db  =  new Connect();
  $page = isset($_GET['page'])?$_GET['page']:0;
  $type = isset($_GET['type'])?$_GET['type']:0;
  $id_size = isset($_GET['id'])?$_GET['id']:0;
  $p = isset($_GET['p'])?$_GET['p']:0;
  if ($page=="product") {
      $condition='';
      if ($id_size) {
        $condition = " `id` = '{$id_size}'";
      }
      $data_size = $db->select('san_pham','*',$condition);
      if (count($data_size) != 0) {
            $data_size = $data_size[0];
      }
       $type = $data_size['loai_sp'];

        $condition = " `sp_id` = '{$id_size}'";
    
      $data_size = $db->select('dm_sp','*',$condition);
      if (count($data_size) != 0) {
            $data_size = $data_size[0];
      }
       $id_size = $data_size['dm_id'];
  }
 

 ?>
          <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
               <?php 
                  $condition_menu = " `loai` = '".$type."'";
                  $menu = $db->select('danh_muc','*',$condition_menu);
                ?>
                <?php foreach ($menu as $key => $sub): ?>
                  <li class="list-group-item clearfix 
                  <?php echo $sub['id']==$id?'active':'' ?>"><a href="index.php?page=cat&type=<?php echo $type ?>&id=<?php echo $sub['id'] ?>"><i class="fa fa-angle-right"></i> <?php echo $sub['ten'] ?></a></li>
                <?php endforeach ?>
              
            </ul>

            <div class="sidebar-filter margin-bottom-25">
      
              <form action="" method="post">
                <h3>Giá</h3>
              <p>
                <label for="from">Từ</label>
                <input type="number" name="from" style="border:0; color:#f6931f; font-weight:bold;">
                <br>
                <label for="to">Đến</label>
                <input type="number" name="to" style="border:0; color:#f6931f; font-weight:bold;">
                <input type="submit" value="Lọc" class="btn btn-small">
              </p>
              </form>
              
            </div>

            
          </div>
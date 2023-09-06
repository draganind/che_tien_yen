<h3 style="text-align: center; color: #FFF">Liệt kê đơn hàng</h3>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<style>
  body {
    color: #73879C;
    background: #2A3F54;
    font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.471;
}
.table-striped>tbody>tr:nth-of-type(even) {
  background: #ceefce;
}
.container-admin {
			width: 100% !important;
	}
  .table>thead>tr>th {
    color: #fff;
}
</style>
  <div class="nav_menu" style = "font-size: 18px; width: 100%">
    <table class="table table-striped" >
      
    <thead>
      <tr>
        <th>Id</th>
        <th>Code đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($order as $key => $ord){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['order_code'] ?></td>
        <td><?php echo $ord['order_date'] ?></td>
        <td><?php if($ord['order_status']==0){echo 'đơn hàng mới';}else{echo 'đã xử lý';} ?></td>
        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code'] ?>">Xem đơn hàng</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
    
  </div>
  

<h3 style="text-align: center;">Liệt kê sản phẩm</h3>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<table class="table table-striped" style = "margin-left: 280px; font-size: 18px; width: 1500px">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên </th>
        <th>Hình </th>
        <th>Danh mục </th>
        <th>Giá </th>
        <th>Số lượng</th>
        <th>Hot</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody style="background-color: white;">
      <?php
      $i = 0;
      foreach($product as $key => $pro){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pro['title_product'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" height="50" width="50"></td>
        <td><?php echo $pro['title_category_product'] ?></td>
        <td><?php echo number_format($pro['price_product'],0,',','.').'đ' ?></td>
        <td><?php echo $pro['quantity_product'] ?></td>
        <td><?php 

        if($pro['product_hot']==0){
          echo 'Không có';
        }else{
          echo 'Có';
        }

         ?></td>
       
        <td><a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product'] ?>">Cập nhật</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
<h3 style="text-align: center; color:azure"></h3>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<table class="nav_menu" style = "margin-left: 290px; font-size: 18px; width: 1400px;">
    <thead">
      <tr style="color:black;">
        <th>Id</th>
        <th>Tên </th>
        <th>Hình </th>
        <th>Danh mục </th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($post as $key => $pos){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pos['title_post'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" height="50" width="50"></td>
        <td><?php echo $pos['title_category_post'] ?></td>
   
        <td><a onclick="confirm('Are you sure ?')" href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $pos['id_post'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $pos['id_post'] ?>">Cập nhật</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  
  <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


<h3 style="text-align: center; color:azure">LIỆT KÊ DANH MỤC BÀI VIẾT</h3>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:green;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<table class="table table-striped" style = "margin-left: 290px; font-size: 18px; width: 1400px;">
    <thead>
      <tr style="color: azure;">
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody style="background-color: white;">
      <?php
      $i = 0;
      foreach($category as $key => $cate){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_post'] ?></td>
        <td><?php echo $cate['desc_category_post'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/post/delete_category/<?php echo $cate['id_category_post'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/post/edit_category/<?php echo $cate['id_category_post'] ?>">Cập nhật</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
</head>
</html>

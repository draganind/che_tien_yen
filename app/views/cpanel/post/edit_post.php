<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center;">Cập nhật bài viết</h3>

<div class="col-md-6">
<?php
foreach($postbyid as $key => $pos) {
?>
	<form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $pos['id_post'] ?>" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Tên bài viết</label>
	    <input type="text" value="<?php echo $pos['title_post'] ?>" name="title_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="email">Hình ảnh sản phẩm</label>
	    <input type="file" name="image_post" class="form-control" >
	    <p><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" height="100" width="100"></p>
	  </div>
	  <div class="form-group">
	    <label for="pwd">Chi tiết bài viết</label>
	    <textarea  id="editor" name="content_post" rows="10" style="resize: none" class="form-control"><?php echo $pos['content_post'] ?></textarea>  
	  </div>
	  <div class="form-group">
	    <label for="pwd">Danh mục bài viết</label>
	    <select class="form-control" name="category_post">
	    	<?php
	    	foreach($category as $key => $cate){ 
	    	?>
	    	<option <?php if($cate['id_category_post']==$pos['id_category_post']){ echo 'selected'; } ?> value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
	    	<?php
	    	} 
	    	?>
	    </select>
	  </div>

	  <button type="submit" name="updatepost" class="btn btn-default">Cập nhật bài viết</button>
	</form>
<?php
} 
?>

</div>
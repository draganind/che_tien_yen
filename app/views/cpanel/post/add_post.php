<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center;">Thêm bài viết</h3>

<div class="col-md-6" style = "margin-left: 290px; font-size: 18px; width: 1400px">
	<form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Tên bài viết</label>
	    <input type="text" name="title_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="email">Hình ảnh sản phẩm</label>
	    <input type="file" name="image_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Chi tiết bài viết</label>
	    <textarea id="editor" name="content_post" rows="10" style="resize: none" class="form-control"></textarea>  
	  </div>
	  <div class="form-group">
	    <label for="pwd">Danh mục bài viết</label>
	    <select class="form-control" name="category_post">
	    	<?php
	    	foreach($category as $key => $cate){ 
	    	?>
	    	<option value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
	    	<?php
	    	} 
	    	?>
	    </select>
	  </div>

	  <button type="submit" name="addpost" class="btn btn-default">Thêm bài viết</button>
	</form>
</div>


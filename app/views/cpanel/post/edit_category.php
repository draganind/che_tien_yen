<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center;">Cập nhật danh mục bài viết</h3>

<div class="col-md-6" style = " font-size: 18px; width: 1400px">
	<?php
	foreach($categorybyid as $key => $cate){ 
	?>
	<form action="<?php echo BASE_URL ?>/post/update_category_post/<?php echo $cate['id_category_post'] ?>" method="POST">
	  <div class="form-group">
	    <label for="email">Tên danh mục</label>
	    <input type="text" value="<?php echo $cate['title_category_post'] ?>" name="title_category_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả danh mục</label>
	    <textarea name="desc_category_post" style="resize: none;" rows="5" class="form-control"><?php echo $cate['desc_category_post'] ?></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Cập nhật danh mục</button>
	</form>
	<?php
	} 
	?>

</div>
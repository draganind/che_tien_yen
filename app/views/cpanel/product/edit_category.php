<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center;">Cập nhật danh mục sản phẩm</h3>

<div class="col-md-6">
	<?php
	foreach($categorybyid as $key => $cate){ 
	?>
	<form action="<?php echo BASE_URL ?>/product/update_category_product/<?php echo $cate['id_category_product'] ?>" method="POST">
	  <div class="form-group">
	    <label for="email">Tên danh mục</label>
	    <input type="text" value="<?php echo $cate['title_category_product'] ?>" name="title_category_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả danh mục</label>
	    <textarea name="desc_category_product" id="editor" style="resize: none;" rows="5" class="form-control"><?php echo $cate['desc_category_product'] ?></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Cập nhật danh mục</button>
	</form>
	<?php
	} 
	?>

</div>
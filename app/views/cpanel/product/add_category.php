<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center;">Thêm danh mục sản phẩm</h3>

<div class="col-md-6" style = "margin-left: 280px; font-size: 18px; width: 1500px">
	<form action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
	  <div class="form-group">
	    <label for="email">Tên danh mục</label>
	    <input type="text" name="title_category_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả danh mục</label>
	    <textarea name="desc_category_product" rows="5" id="editor" class="form-control"></textarea>  
	  </div>
	
	  <button type="submit" class="btn btn-default">Thêm danh mục</button>
	</form>
</div>
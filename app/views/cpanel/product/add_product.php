<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center;">Thêm sản phẩm</h3>

<div class="col-md-6" style = "margin-left: 290px; font-size: 18px; width: 1400px">
	<form action="<?php echo BASE_URL ?>/product/insert_product" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Tên sản phẩm</label>
	    <input type="text" name="title_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="email">Hình ảnh sản phẩm</label>
	    <input type="file" name="image_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="email">Giá sản phẩm</label>
	    <input type="text" name="price_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="email">Số lượng sản phẩm</label>
	    <input type="text" name="quantity_product" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả sản phẩm</label>
	    <textarea id="editor" name="desc_product" rows="5" style="resize: none" class="form-control"></textarea>  
	  </div>
	  <div class="form-group">
	    <label for="pwd">Danh mục sản phẩm</label>
	    <select class="form-control" name="category_product">
	    	<?php
	    	foreach($category as $key => $cate){ 
	    	?>
	    	<option value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
	    	<?php
	    	} 
	    	?>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="pwd">Sản phẩm hot</label>
	    <select class="form-control" name="product_hot">

	    	<option value="0">Không</option>
	    	<option value="1">Có</option>
	    	
	    </select>
	  </div>

	  <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
	</form>
</div>
<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 style="text-align: center; color:azure">THÊM DANH MỤC BÀI VIẾT</h3>

<div class="col-md-6" style = "margin-left: 290px; font-size: 18px; width: 1400px">
	<form action="<?php echo BASE_URL ?>/post/insert_category" method="POST">
	  <div class="form-group">
	    <label for="email" style="color: azure;">Tên danh mục</label>
	    <input type="text" name="title_category_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd" style="color: azure;">Miêu tả danh mục</label>
	    <input type="text" name="desc_category_post" class="form-control">
	  </div>
	
	  <button type="submit" class="btn btn-default">Thêm danh mục</button>
	</form>
</div>
<?php 
$messageError = '';
$formInfo = array(
	'name'=>'',
	'price'=>'',
	'imgae'=>'',
	'description'=>''
);


if(isset($this->arrParam['form'])){
	foreach ($this->arrParam['form'] as $key => $value) {
		$formInfo[$key] = $value;
	}
}

if(!empty($this->errors)){
	$messageError .= Helper::messageError($this->errors);
}
?>
<h1 class="text-center"><?php echo $this->title ?></h1>
<?php echo $messageError ?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nhập Tên Sản Phẩm</label>
		<input type="text" class="form-control" name="form[name]" value="<?php echo $formInfo['name'] ?>">
	</div>
	<div class="form-group">
		<label>Nhập Giá Sản Phẩm</label>
		<input type="text" class="form-control" name="form[price]" value="<?php echo $formInfo['price'] ?>">
	</div>
	<?php 
	if(!empty($formInfo['image']))
		echo "<div class='form-group'>
	<label class='img-label'>Hình ảnh hiện tại chọn ảnh mới nếu muốn đổi</label>
	<img src='".$this->_dirImg."/sanpham/".$formInfo['image']."'>
	</div>"
	?>
	<div class="form-group">
		<label>Chọn Hình Sản Phẩm</label>
		<input type="file" class="form-control-file" name="image">
	</div>
	<div class="form-group">
		<label>Nhập Mô Tả</label>
		<textarea name="form[description]" class="form-control" rows="4" tabindex="4"><?php echo $formInfo['description'] ?></textarea>
	</div>	
	<div class="form-group">		
		<button type="submit" class="btn btn-primary" value="submit" name="form[submit]">Thêm Sản Phẩm</button>
		<input type="hidden" name="form[token]" value="<?php echo time() ?>">
	</div>	
</form>

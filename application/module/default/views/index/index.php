<?php 
$listItem = $this->listItem;
?>

<div id="content">
	<h2 class="title">Sản phẩm nổi bật</h2>
	<div class="container">
		<div class="row">
			<?php foreach ($listItem as $key => $value) {
				?>			
			<div class="col-md-4">
				<div class="icon">

				</div>
				<div class="product">
					<div class="image">
						<img src="<?php echo $imageURL.'/sanpham/'.$value['image'] ?>" alt="kemface">
					</div>
					<div class="info">
						<div class="row">
							<div class="col-7">							
								<p class="name"><?php echo $value['name'] ?></p>
								<p class="price">Giá: <span><?php echo $value['price'] ?></span></p>
							</div>
							<div class="col-5">
								<a href="" title="add-cart"><img src="<?php echo $imageURL ?>/image/add-cart.png" alt="add-cart"></a>
								<label>Thêm vào giỏ hàng</label>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<?php } ?>	
		</div>
	</div>
</div>
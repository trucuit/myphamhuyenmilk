<?php 


$listItem  =$this->listItem;
?>

<!-- Product -->
<table class="table table-striped">
	<thead class="thead-inverse">
		<tr>
			<th class="stt">STT</th>
			<th class="name">Sản Phẩm</th>
			<th class="price">Giá</th>
			<th class="view" >Lượt view</th>
			<th class="image">Hình sản phẩm</th>
			<th class="intro">Mô tả</th>
			<th class="edit">Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($listItem as $key => $value) { ?>
		<tr>
			<th scope="row stt"><?php echo $key + 1 ?></th>
			<td class="name"><?php echo $value['name'] ?></td>
			<td class="price"><?php echo number_format($value['price'],0,',','.') ?>đ</td>
			<td class="view"><?php echo $value['view'] ?></td>
			<td class="image"><img src="<?php echo $imageURL.'/sanpham/'.$value['image'] ?>" alt=""></td>
			<td class="intro"><?php echo $value['description'] ?></td>
			<td class="edit">
				<a href="<?php echo URL::createLink('admin','action','form',['id'=>$value['id']]) ?>" class="btn btn-info btn-sm">Sửa</a>
				<a href="<?php echo URL::createLink('admin','action','delete',['id'=>$value['id']]) ?>" class="btn btn-danger btn-sm">Xóa</a>
			</td>
		</tr>						
		<?php } ?>
	</tbody>
</table>
<!-- //Product -->

<!-- Pagination -->
<nav>
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
<!-- //Pagination -->

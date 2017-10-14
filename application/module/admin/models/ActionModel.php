<?php 
class ActionModel extends Model
{
	public function insertItem($data)
	{	
		parent::insert($data);
		move_uploaded_file($data['image']['tmp_name'],TEMPLATE_PATH.'/admin/main/images/sanpham/'.$data['image']['name']);
		copy(TEMPLATE_PATH.'/admin/main/images/sanpham/'.$data['image']['name'],TEMPLATE_PATH.'/default/main/images/sanpham/'.$data['image']['name']);
	}

	public function updateItem($id,$data,$image)
	{	
		parent::update($id,$data);
		if(is_array($data['image'])){
			unlink(TEMPLATE_PATH.'/admin/main/images/sanpham/'.$image);
			unlink(TEMPLATE_PATH.'/default/main/images/sanpham/'.$image);
			move_uploaded_file($data['image']['tmp_name'],TEMPLATE_PATH.'/admin/main/images/sanpham/'.$data['image']['name']);
			copy(TEMPLATE_PATH.'/admin/main/images/sanpham/'.$data['image']['name'],TEMPLATE_PATH.'/default/main/images/sanpham/'.$data['image']['name']);
		}
	}

	public function getItemID($id)
	{
		$stmt = $this->conn->prepare("SELECT * FROM `$this->table` WHERE id=:id");
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->execute();
		return $data = $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>
<?php 
class ActionController extends Controller{
	public function __construct($params)
	{
		parent::__construct($params);
		$this->_templateObj->setFolderTemplate('admin/main');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	public function formAction()
	{
		$this->_view->title = 'Thêm Sản Phẩm';
		$task               = 'add';

		if(isset($this->_arrParam['id'])){
			$this->_view->title = 'Sửa Sản Phẩm';
			$task     = 'edit';
			$id       = $this->_arrParam['id'];
			$itemInfo = $this->_model->getItemID($id);
			if(empty($itemInfo)){
				URL::redirect('admin','index','index');
			}else{
				if(!isset($this->_arrParam['form']))
					$this->_arrParam['form'] = $itemInfo;	
			}
		}

		if(isset($this->_arrParam['form']['token']) && ($this->_arrParam['form']['token'] > 0)){
			if($task == 'add'){
				$this->_arrParam['form']['image'] = $_FILES['image'];
			}elseif($task == 'edit'){				
				if($_FILES['image']['name'] != null){
					$this->_arrParam['form']['image'] = $_FILES['image'];
				}else{
					$this->_arrParam['form']['image'] = $itemInfo['image'];
				}
			}
		
			$validate = new Validate($this->_arrParam['form']);			  
			$validate->addRule('name','string',array('min'=>'3','max'=>255))
			->addRule('price','int',array('min'=>1000,'max'=>1000000000));

			if(is_array($this->_arrParam['form']['image'])){
				$validate->addRule('image','file',array('min'=>0,'max'=>10000000,'entension'=>['png','jpg','gif','jpeg']),false);
			}
			$validate->run();
			$this->_arrParam['form'] = $validate->getResult();
			if($validate->isValid()==false){
				$this->_view->errors = $validate->getError();
			}else{	
				if($task == 'add'){
					$this->_model->insertItem($this->_arrParam['form']);
				}elseif($task == 'edit'){
					$this->_model->updateItem($id,$this->_arrParam['form'],$itemInfo['image']);
				}
				URL::redirect('admin','index','index');
			}
		}
		$this->_view->arrParam = $this->_arrParam;
		$this->_view->render('action/form');
	}

	public function deleteAction(){
		if(!empty($this->_arrParam['id'])){
			$this->_model->delete($this->_arrParam['id']);
		}
		URL::redirect('admin','index','index');
	}
}
?>


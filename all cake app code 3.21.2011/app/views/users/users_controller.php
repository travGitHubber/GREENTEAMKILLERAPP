<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& password access &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
		
		if($this->action=='add'){
			$this->Auth->authentication = $this->User;
		}
		
		
	}
	function login(){
		
	}
	function index(){
		
	}
	
	function logout(){
		$this->redirect($this->Auth->logout());
	}
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&& end pass &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
	function add(){
		
		
		if(!empty($this->data)){
			$this->User->create();
			if($this->User->save($this->data)){
				$this->Session->setFlash(__('The user cound not be saved.  Try again.', true));
			}
		}
	}
	
}
?>


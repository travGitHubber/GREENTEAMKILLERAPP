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
		$this->User->recursive=0;
		$this->set('users', $this->paginate());
	}
	function view($id = null){
		if(!id){
			$this->Session->setFlash(__('invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
	
	function logout(){
		$this->redirect($this->Auth->logout());
	}
	//&&&&&&&&&&&&&&&&&&&&&&&&&&&&& end pass &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
	function add(){
		
		
		if(!empty($this->data)){
			$this->User->create();
			if($this->User->save($this->data)){
				$this->Session->setFlash(__('The user was saved.', true));
			}else{
				$this->Session->setFlash(__('The user cound not be saved.  Try again.', true));
			}
			
		}
	}
	
}
?>
<?php
/**
 * used for authentication
 */
class AppController extends Controller {
	// default locks down controllers
	var	$components = array('Auth', 'Session');
	
	function beforeFilter(){
		//$this->Auth->allow('index', 'view'); // permit these pages without authentication
		$this->Auth->authError = 'Please login to view that page.';
		$this->Auth->loginError = 'Incorrect username/password combination.';
		$this->Auth->loginRedirect = array('controller'=>'surveyexports', 'action'=>'index');
		//$this->Auth->logoutRedirect = array('controller'=>'surveyexports', 'action'=>'index');
		
		$this->set('admin',$this->_isAdmin());
		$this->set('logged_in', $this->_loggedIn());
		$this->set('users_username',$this->_usersUsername());
	}
	
	function _isAdmin(){
		$admin=FALSE;
		if($this->Auth->user('roles')=='admin'){
			$admin = TRUE;
		}
		return $admin;
		
	}
	
	function _loggedIn(){
		$logged_in = FALSE;
		if($this->Auth->user()){
			$logged_in= True;
			
		}
		return $logged_in;
	}
	function _usersUsername(){
		$users_username=NULL;
		if($this->Auth->user()){
			$users_username = $this->Auth->user('username');
		}
		return $users_username;
	}
	
}


















?>
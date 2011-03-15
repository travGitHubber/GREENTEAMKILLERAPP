<?php
class PostsController extends AppController{



	// always append the word controller to the class for a controller and always extend appcontroller

	var $name = 'posts'; // controller name is ALWAYS plural

	//action
	function hello_world(){
		//now create a view action inside views create a corresponding view

		// ALL actions have THEIR OWN VIEW you just make a file and name it whatever.ctp in that folder


	}
	Function index() {
		//$this->Post->find('all'); // find all posts, makes sql string that returns all posts from db
		// send to view
		$this->set('posts',$this->Post->find('all')); // set the info to the view, second data is what we want to send to the view
		
		
	}






}




?>
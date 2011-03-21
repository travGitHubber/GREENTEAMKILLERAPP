<?php
class User extends AppModel{
	/**
	 * Credit for this class must be given to youtube user Andrew Perkins
	 * http://www.youtube.com/watch?v=Y5YiRmeqo3s&feature=related
	 * 
	 * @var unknown_type
	 */
	var $name = 'User'; // this variable must match the function in the controller index second variable
	var $displayfield = 'name';
	
	/**
	 * 
	 * VALIDATES the new user entry data, ensuring proper lengths and that the user name is unique, also checks for minimum password requirements.
	 * @var unknown_type
	 */
	var $validate = array(
	'name'=>array(
	'Please enter your name.'=>array(
	'rule'=>'notEmpty', 
	'message'=>'Please enter your name.'
	)
	), 
	'username'=>array(
	'The username must be between 5 and 15 characters.'=>array(
	'rule'=>array('between', 5, 15),
	'message'=> 'The username must be between 5 and 15 characters.'
	),
	'That username has already been taken.'=>array(
	'rule'=>'isUnique',
	 'message'=>'That username has already been taken.'
	)
	), 
	'password'=>array(
	'The password must be between 5 and 40 characters.'=>array(
	'rule'=>array('between', 5, 40),
	'message'=>'The password must be between 5 and 40 characters.'
	)
	)
	);
	
	
}
?>
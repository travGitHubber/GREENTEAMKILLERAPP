<?php

class CrudrecordController extends AppController {

	var $name = 'Crudrecord';


function edit(){
	
	if(empty($this->data)){
		
		$this->data = $this->Surveyexport->read(NULL, $id);
		
	}else {
		if($this->Surveyexport->save($this->data)){
			$this->Session->setFlash('Update successful');
			$this->redirect(array('action'=>'view', $id)); //redirect and let user view updates
			
		}
	}
	
	
}
	
}
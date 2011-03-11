<?php
class SurveyExportsController extends AppController{



	// always append the word controller to the class for a controller and always extend appcontroller

	var $name = 'Surveyexports'; // controller name is ALWAYS plural

	//action
	function hello_world(){
		//now create a view action inside views create a corresponding view

		// ALL actions have THEIR OWN VIEW you just make a file and name it whatever.ctp in that folder
	}
	Function index() {
		
		// send to view
		$this->set('surveyexports',$this->Surveyexport->find('all')); // set the //info to the view, second data is what we want to send to the view
		
		
	}






}




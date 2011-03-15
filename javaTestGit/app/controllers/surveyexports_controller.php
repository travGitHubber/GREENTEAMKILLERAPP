<?php
class SurveyExportsController extends AppController{
var $layout='default';



	// always append the word controller to the class for a controller and always extend appcontroller

	var $name = 'Surveyexports'; // controller name is ALWAYS plural



	function viewActive() {


		$this->set('title_for_layout', 'View Active Users');
		$this->layout = 'layout'; // a ctp file created in layouts in the cake folder
	}
	function viewImage() {
		$this->layout = 'image';
		//output user image
	}




	//action
	function hello_world(){
		//now create a view action inside views create a corresponding view

		// ALL actions have THEIR OWN VIEW you just make a file and name it whatever.ctp in that folder
	}
	Function index() {
		$this->layout = 'default';
		
		// send to view
		// get all headers to define checkboxes
		//$headerArray=$this->get(array_keys($surveyexports[0]['Surveyexport']));
		//$this->set('content_for_layout', Surveyexport->find('all') ;
		//$layout->set('headerList',$headerArray); // send headers to layout
		$this->set('surveyexports',$this->Surveyexport->find('all')); // set the //info to the view, second data is what we want to send to the view
		$this->set('title_for_layout','THE GREEN TEAMS FRIGGIN PAGE');
		//global $layout; 
		//$this->layout->set('fromView', $this->Surveyexport->find('all')); // set this variable in the layout to all query results
		

	}
	Function report1(){
		//$this->set('surveyexports',$this->Surveyexport->find('all')); // set the //info to the view, second data is what we want to send to the view

	}
	Function homepage(){



	}

	function runReport (){
		// don't do anything until the form is submitted
		if(!empty($this->params['form']))
		{
			if($this->params['form']=='allData'){
				index();
			}else {
				index();
			}
				
				
		}
	}
	
	function cannedReports(){
		// this is the report page for canned reports
		
	if(!empty($this->params['form']))
		{
			if($_POST['cannedReports']=='allData'){
				$this->redirect('alldatareport');
				//$this->set('surveyexports',$this->Surveyexport->find('all'));
				
				//echo " running your fancy report";
			}
			if($_POST['cannedReports']=='recordCount')
			{
					$this->redirect('countsreport'); // record count page
				
				
				
				
			}
		if($_POST['cannedReports']=='referralReport')
			{
					$this->redirect('referralreport'); // record count page
				
				
				
				
			}
			
			//else
			 //{
				//echo " select a report to run!";
				//echo "<br/>what was passed  ".$this->params['form']."</br>";
				//echo" <br/>post array ".$_POST['cannedReports'] ;
				//echo"</br></br>";
				
			//}
				
				
		}
		
	}
	
	function alldatareport(){
		$this->set('surveyexports',$this->Surveyexport->find('all'));
		
	}
	
	function countsreport(){
		// this is a selective find, the surveyexport.id I believe would be the model and the cel name
		//$this->set('surveyexports',$this->Surveyexport->find('count', array('conditions'=>array('id'=>'all'))));
		//$this->set('surveyexports',$this->Surveyexport->find('all'));
		//$this->set('surveyexports',$this->Surveyexport->find('count'));
		//$this->set('surveyexports',$this->Surveyexport->findAllById('*'),id);
		//$this->set('totalCount',$this->Surveyexport->find('count', array('fields'=>' DISTINCT state')));
		//$this->set(('totalCount[0]'),$this->Surveyexport->find('count', array('fields'=>' DISTINCT id'))); // count individual ids in the database
		//$this->set('totalCount',$this->Surveyexport->find('count', array('fields'=>' DISTINCT focus_id')));   // ??????????????????????????? needs set in DB
		//$this->set('totalCount[1]',$this->Surveyexport->find('count', array('fields'=>'id'))); // count all id's in the database
		
		
		// new approach build entire array then pass it set up array list then pass vs. append
		$idDistinctField=$this->Surveyexport->find('count', array('fields'=>' DISTINCT id'));
		$idCountField=$this->Surveyexport->find('count', array('fields'=>'id'));
		$ucdCount="MISSING TABLE IN DB PLEASE ADD"; // ADD ME LATER WHEN DATABASE IS FINALIZED //=$this->Surveyexport->find('count', array('fields'=>'ucd???'));
		$ucdUnique="MISSING TABLE IN DB PLEASE ADD"; // ADD ME LATER WHEN DATABASE IS FINALIZED ////=$this->Surveyexport->find('count', array('fields'=>'DISTINCT ucd???'));
		$tempCounts=array(  array($idDistinctField), array($idCountField), array($ucdCount), array($ucdUnique)); // array containing distinct id and id count
		$this->set('totalCount',$tempCounts); // set total count in view to tempcounts array
		
		
		
	}
	
	function referralreport(){
		$referredBy= $this->Surveyexport->find('all', array('group'=>'referal' ,'fields'=>'referal', 'limit'=>200)); // array structure array([0]array[Surveyexport]array[referal]=element
		//$referredByCounts=$this->Surveyexport->find('count', array('group'=>'referal' ,'fields'=>'referal', 'limit'=>200));
		$referredByCountsArray;
		$count=0;
		// loop through all unique values and spit out counts of each
		foreach ($referredBy as $value) {
			// see array structure for why we have to dig this deep
			$referredByCount= $this->Surveyexport->find('count', array('group'=>'referal' ,'fields'=>'referal', 'conditions'=>array('referal =' =>$value['Surveyexport']['referal'])));// value is used ot identify each iterations elements
			//$referredByCountsArray[$count]=$referredByCount;
			$referredByCountsArray[$count]=array($value['Surveyexport'],$referredByCount); // array format 'name', 'count'
			
			
			$count++;
		}
		
		
		
		
		
		//$referredByCount= $this->Surveyexport->find('count', array('group'=>'referal' ,'fields'=>'referal', 'conditions'=>array('referal =' =>'Phone Call')));
		
		
		//$referredBy=$this->Surveyexport->find('referal=Flyer', "COUNT(DISTINCT referal) AS 'Phone Call' ");
		//$referredBy= $this->Surveyexport->find('list', array('fields'=>'referal'));
		$futureFocusGroups;
		$interviews;
		$futureStudies;
		$receiveUpdates;
		$receiveAnnouncements;
		
		$tempCounts=array(array($referredBy));
		
		$this->set('referralData',$referredByCountsArray);
	}
	






}



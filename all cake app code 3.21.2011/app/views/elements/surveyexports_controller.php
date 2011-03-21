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
		$this->set('title_for_layout','THE GREEN TEAMS RULES YOU!!');
		//global $layout;
		//$this->layout->set('fromView', $this->Surveyexport->find('all')); // set this variable in the layout to all query results
		$this->passOverviewData();

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
			if($_POST['cannedReports']=='demographicReport')
			{
				$this->redirect('demographicreport'); // record count page
			}
			if($_POST['cannedReports']=='diseaseReport')
			{
				$this->redirect('diseasereport'); // record count page
			}

			//else
			//{
			//echo " select a report to run!";
			//echo "<br/>what was passed  ".$this->params['form']."</br>";
			//echo" <br/>post array ".$_POST['cannedReports'] ;
			//echo"</br></br>";

			//}
		$this->passOverviewData();

		}

	}

	function alldatareport(){
		$this->set('surveyexports',$this->Surveyexport->find('all'));
		$this->passOverviewData();
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


		$this->passOverviewData();
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
		$this->passOverviewData();
	}



	/**
	 * Page for disease report, loads element diseaseReportElement, covers who treats, lenght of diabetes, type of diabetes, and treatments
	 *
	 */
	function diseasereport(){
	//who treats - - this needs reviewed ??????????????????????????????????????????? there are multiple who treats columns, final db design will impact this display 
	$this->countHelper('whotreats1','whoTreatsName1','whotreats1','whoTreatsArray1' );
	$this->countHelper('whotreats2','whoTreatsName2','whotreats2','whoTreatsArray2' );
	$this->countHelper('timewithdiabetes','timeWithDiabetesName','timewithdiabetes','timeWithDiabetesArray' );
	$this->countHelper('typeofdiabetes','typeOfDiabetesName','typeofdiabetes','typeOfDiabetesArray' );
	$this->countHelper('typeofdiabetes','typeOfDiabetesName','typeofdiabetes','typeOfDiabetesArray' );
	
	//treatments -- 3 columns currently in db - probably ba bai in normalized version ??????????????????????????????????????????????????????????????
	$this->countHelper('treatment','treatmentName1','treatment','treatmentArray1' );
	$this->countHelper('treatment2','treatmentName2','treatment2','treatmentArray2' );
	$this->countHelper('treatment3','treatmentName3','treatment3','treatmentArray3' );
	$this->passOverviewData();
	}

	/**
	 * Page for demographic report, loads element demoReportElement
	 * report to track location, genter, year born, education, income level, marital status, family status
	 *
	 *
	 */
	function demographicreport(){
		// city
		$this->countHelper('City','locationCityName','City','locationCityArray' );
		// state
		$this->countHelper('State','locationStateName','State','locationStateArray' );
		// gender
		$this->countHelper('gender','genderName','gender','genderArray' );
		// yearborn
		$this->countHelper('yearborn','yearBornName','yearborn','yearBornArray' );
		//education
		$this->countHelper('education','educationName','education','educationArray' );
		// income
		$this->countHelper('income','incomeName','income','incomeArray' );
		// martial
		$this->countHelper('maritalstatus','maritalName','maritalstatus','maritalArray' );
		// family
		$this->countHelper('familystatus','familyName','familystatus','familyArray' );
		$this->passOverviewData();

	}

	/**
	 * PROTOTYPE
	 * countHelper performs distinct counts and returns a combination array of the associated distinct field value and it's count
	 * @param unknown_type $fieldName - the name of the field in the database, should be a string, no spaces -this jacks up cake
	 * @param unknown_type $fieldArrayName - the name of the field array
	 * @param unknown_type $fieldComboArray - the combination array of the field distinct value and count, this is an associative array, it must be iterated in a specific way
	 * @param unknown_type $nameValue - used for the set procedure in case a header needs defined for table output, first param, associates to a variable in the view
	 * @param unknown_type $nameSetValue - used in set method as second param to set the associated variable in the view, this is a header name, it can NOT(working on this) be different from the database name
	 * @param unknown_type $viewArrayName - the name of the variable in the view that holds DATA
	 * warning:  this method sets a value in the view/element, so there MUST be an associated variable (2 actually, 1 for data, 1 for name) that relates to the value to set to it's name in the view that calls this method
	 * in the view there should be a $fieldArray, and $name variable, format should follow (fieldname.Array) so familystatus field would be $familyStatusArray
	 *
	 */
	function countHelper($fieldName,$nameValue,$nameSetValue,$viewArrayName ){
		$fieldNameArray=$this->Surveyexport->find('all', array('group'=>$fieldName ,'fields'=>$fieldName, 'limit'=>2000));
		$count=0;
		foreach ($fieldNameArray as $value) {
			// see array structure for why we have to dig this deep
			$StatusCount=$this->Surveyexport->find('count', array('group'=>$fieldName ,'fields'=>$fieldName, 'conditions'=>array($fieldName.' =' =>$value['Surveyexport'][$fieldName])));// value is used ot identify each iterations elements
			$fieldComboArray[$count]=array($value['Surveyexport'],$StatusCount); // array format 'name', 'count'


			$count++;
		}
		// set the values in the view

		$this->set($nameValue,$nameSetValue);
		$this->set($viewArrayName, $fieldComboArray);
	}

	
	/**
	 * this is essentially reusable code for displaying all overview info on each page, every page must call this method to display the overview elements information
	 * Enter description here ...
	 */
	function passOverviewData(){
		$overviewON=true;//boolean to determine if the overview should be displayed
		$idDistinctCount=$this->Surveyexport->find('count', array('fields'=>' DISTINCT id')); // count of all distinct ids
		$idCount=$this->Surveyexport->find('count', array('fields'=>'id')); // count of all user ids
		$partIDCount=$this->Surveyexport->find('count', array('fields'=>'participationID')); // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! must be fixed to NOT count blanks
		$partIDDistinctCount=$this->Surveyexport->find('count', array('fields'=>'DISTINCT participationID'));
		// perform percentage calc in view as usual
		$this->countHelper('futureFocusGroups','futureFocusGroupsName','futureFocusGroups','futureFocusGroupsArray' ); // table of futurn involvement, ensure name and data variables in element are present
		$this->countHelper('futureInterviews','futureInterviewsName','futureInterviews','futureInterviewsArray' );
		$this->countHelper('futureStudies','futureStudiesName','futureStudies','futureStudiesArray' );
		//inclusion info
		
		//delete

		
		//end delete
		
		
		$this->countHelper('statusUpdates','statusUpdatesName','statusUpdates','statusUpdatesArray' );
		$this->countHelper('notify','notifyLaunchName','notify','notifyLaunchArray' );
		$this->countHelper('Surveys','surveysName','Surveys','surveysArray' );
		
		$this->countHelper('smartPhone','smartPhoneName','smartPhone','smartPhoneArray' );
		$this->countHelper('phoneType','phoneTypeName','phoneType','phoneTypeArray' );
		$this->countHelper('computerinternet','computerInternetName','computerinternet','computerInternetArray' );
		$this->countHelper('computerinternet','computerInternetName','computerinternet','computerInternetArray' );
		
		// set totals
		$this->set('totalUsers', $idCount);
		$this->set('totalDistinctUsers', $idDistinctCount);
		$this->set('totalUCDParticipants', $partIDCount);
		$this->set('totalUCDDistinctParticipants', $partIDDistinctCount);
		
		
		
	
	}


}



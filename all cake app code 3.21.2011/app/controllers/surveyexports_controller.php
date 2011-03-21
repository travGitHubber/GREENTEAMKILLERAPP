<?php
/**
 *
 * Controller for all project pages
 * @author Travis Bloomquist
 *
 */
class SurveyExportsController extends AppController{
	// always append the word controller to the class for a controller and always extend appcontroller
	var $layout='default';
	var $name = 'Surveyexports'; // controller name is ALWAYS plural

	/**
	 * Default page for surveyexports site
	 *
	 */
	Function index() {
		$this->layout = 'default';
		$this->set('surveyexports',$this->Surveyexport->find('all')); // set the //info to the view, second data is what we want to send to the view
		$this->set('title_for_layout','THE GREEN TEAMS RULES YOU!!');
		$this->passOverviewData();

	}
	/**
	 * for later use
	 *
	 */
	Function homepage(){

	}

	/**
	 * Very important function, defines which report is pulled based off post data sent from the cannedreports.ctp view
	 * Enter description here ...
	 */
	function cannedreports(){
		// this is the report page for canned reports
		$this->passOverviewData();
		if(!empty($this->params['form']))
		{
			if($_POST['cannedReports']=='allData'){
				$this->redirect('alldatareport');
			}
			if($_POST['cannedReports']=='recordCount')
			{
				$this->redirect('countsreport');

			}
			if($_POST['cannedReports']=='referralReport')
			{
				$this->redirect('referralreport');
			}
			if($_POST['cannedReports']=='demographicReport')
			{
				$this->redirect('demographicreport');
			}
			if($_POST['cannedReports']=='diseaseReport')
			{
				$this->redirect('diseasereport');
			}
			if($_POST['cannedReports']=='comselfeff')
			{
				$this->redirect('comsereport');
			}
			if($_POST['cannedReports']=='ucdreport')
			{
				$this->redirect('ucdreport');
			}
		}

	}
	/**
	 * report of all data in database
	 *
	 */
	function alldatareport(){
		$this->set('surveyexports',$this->Surveyexport->find('all'));
		$this->passOverviewData();

	}
	/**
	 * page for countsreport
	 *
	 */
	function countsreport(){
		// new approach build entire array then pass it set up array list then pass vs. append
		$idDistinctField=$this->Surveyexport->find('count', array('fields'=>' DISTINCT id'));
		$idCountField=$this->Surveyexport->find('count', array('fields'=>'id'));
		$ucdCount="MISSING TABLE IN DB PLEASE ADD"; // ADD ME LATER WHEN DATABASE IS FINALIZED //=$this->Surveyexport->find('count', array('fields'=>'ucd???'));
		$ucdUnique="MISSING TABLE IN DB PLEASE ADD"; // ADD ME LATER WHEN DATABASE IS FINALIZED ////=$this->Surveyexport->find('count', array('fields'=>'DISTINCT ucd???'));
		$tempCounts=array(  array($idDistinctField), array($idCountField), array($ucdCount), array($ucdUnique)); // array containing distinct id and id count
		$this->set('totalCount',$tempCounts); // set total count in view to tempcounts array
		$this->passOverviewData();
	}
	/**
	 * page for referral report
	 *
	 */
	function referralreport(){
		$referredBy= $this->Surveyexport->find('all', array('group'=>'referal' ,'fields'=>'referal', 'limit'=>200)); // array structure array([0]array[Surveyexport]array[referal]=element
		$referredByCountsArray;
		$count=0;
		// loop through all unique values and spit out counts of each
		foreach ($referredBy as $value) {
			// see array structure for why we have to dig this deep
			$referredByCount= $this->Surveyexport->find('count', array('group'=>'referal' ,'fields'=>'referal', 'conditions'=>array('referal =' =>$value['Surveyexport']['referal'])));// value is used ot identify each iterations elements
			$referredByCountsArray[$count]=array($value['Surveyexport'],$referredByCount); // array format 'name', 'count'
			$count++;
		}
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


	function ucdreport(){
		$ucdData =$this->Surveyexport->find('all', array('fields'=>array('id','participationID','participantdate1','participantdate2' ),'conditions'=>array('participationID !='=>'')));
		$this->set('ucdData', $ucdData);
		$this->passOverviewData();
		$this->countHelper('participationID', 'participationIDName', 'participationID', 'participationIDArray');

	}



	/**
	 * Computer self efficacy report, currently a giant pile of tables, needs revised badly
	 *
	 */
	function comsereport(){
		$this->passOverviewData();

		/**
		 * Brians field names
		 *
		 * computerSelfefficacyID, //key field
		 * experienceWithComputers,
		 * confidentBrowsingTheIntenet,
		 * confidentSurfingTheIntenet,
		 * confidentCreatingWebPage,
		 * confidentChangingWebPage,
		 * confidentDownloadingFromAnotherComputer,
		 * confidentScanningPicturesToSave,
		 * confidentRecoveringDeletedFile,
		 * confidentFindingInformationOnInternet,
		 * likeWorkingWithComputers,
		 * aspectsOfJobThatRequireComputerUse,
		 * onceStartedWorkingOnComputerHardToStop,
		 * usingComputerIsFrustratingForMe,
		 * boredQuicklyWorkingOnComputer,
		 * computersAreIntimidatingToMe,
		 * feelAmprehensiveAboutUsingComputer,
		 * scaresMeToThinkICouldDelInfoIfIHitTheWrongKey,
		 * hesitateToUseCpuFearOfMakingMistakeICantCorrect,
		 * User_userID
		 */

		// VERY VERY UGLY APPROACH ------------------------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -- needs revision - TB
		//$this->countHelper('computerSelfefficacyID','computerSelfefficacyIDName','computerSelfefficacyID','computerSelfefficacyIDArray' );
		$this->countHelper('experienceWithComputers','experienceWithComputersName','experienceWithComputers','experienceWithComputersArray' );
		$this->countHelper('experienceWithComputers','experienceWithComputersName','experienceWithComputers','experienceWithComputersArray' );
		$this->countHelper('confidentBrowsingTheIntenet','confidentBrowsingTheIntenetName','confidentBrowsingTheIntenet','confidentBrowsingTheIntenetArray' );
		$this->countHelper('confidentSurfingTheIntenet','confidentSurfingTheIntenetName','confidentSurfingTheIntenet','confidentSurfingTheIntenetArray' );
		$this->countHelper('confidentCreatingWebPage','confidentCreatingWebPageName','confidentCreatingWebPage','confidentCreatingWebPageArray' );
		$this->countHelper('confidentChangingWebPage','confidentChangingWebPageName','confidentChangingWebPage','confidentChangingWebPageArray' );
		$this->countHelper('confidentDownloadingFromAnotherComputer','confidentDownloadingFromAnotherComputerName','confidentDownloadingFromAnotherComputer','confidentDownloadingFromAnotherComputerArray' );
		$this->countHelper('confidentScanningPicturesToSave','confidentScanningPicturesToSaveName','confidentScanningPicturesToSave','confidentScanningPicturesToSaveArray' );
		$this->countHelper('confidentRecoveringDeletedFile','confidentRecoveringDeletedFileName','confidentRecoveringDeletedFile','confidentRecoveringDeletedFileArray' );
		$this->countHelper('confidentFindingInformationOnInternet','confidentFindingInformationOnInternetName','confidentFindingInformationOnInternet','confidentFindingInformationOnInternetArray' );
		$this->countHelper('likeWorkingWithComputers','likeWorkingWithComputersName','likeWorkingWithComputers','likeWorkingWithComputersArray' );
		$this->countHelper('aspectsOfJobThatRequireComputerUse','aspectsOfJobThatRequireComputerUseName','aspectsOfJobThatRequireComputerUse','aspectsOfJobThatRequireComputerUseArray' );
		$this->countHelper('onceStartedWorkingOnComputerHardToStop','onceStartedWorkingOnComputerHardToStopName','onceStartedWorkingOnComputerHardToStop','onceStartedWorkingOnComputerHardToStopArray' );
		$this->countHelper('usingComputerIsFrustratingForMe','usingComputerIsFrustratingForMeName','usingComputerIsFrustratingForMe','usingComputerIsFrustratingForMeArray' );
		$this->countHelper('boredQuicklyWorkingOnComputer','boredQuicklyWorkingOnComputerName','boredQuicklyWorkingOnComputer','boredQuicklyWorkingOnComputerArray' );
		$this->countHelper('computersAreIntimidatingToMe','computersAreIntimidatingToMeName','computersAreIntimidatingToMe','computersAreIntimidatingToMeArray' );
		$this->countHelper('feelAmprehensiveAboutUsingComputer','feelAmprehensiveAboutUsingComputerName','feelAmprehensiveAboutUsingComputer','feelAmprehensiveAboutUsingComputerArray' );
		$this->countHelper('scaresMeToThinkICouldDelInfoIfIHitTheWrongKey','scaresMeToThinkICouldDelInfoIfIHitTheWrongKeyName','scaresMeToThinkICouldDelInfoIfIHitTheWrongKey','scaresMeToThinkICouldDelInfoIfIHitTheWrongKeyArray' );
		$this->countHelper('hesitateToUseCpuFearOfMakingMistakeICantCorrect','hesitateToUseCpuFearOfMakingMistakeICantCorrectName','hesitateToUseCpuFearOfMakingMistakeICantCorrect','hesitateToUseCpuFearOfMakingMistakeICantCorrectArray' );

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


	//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ CREATE READ EDIT DELETE
	function edit($id = Null){



		//$id=$_POST['id'];
		if(empty($this->data)){
			$this->data=$this->Surveyexport->read(NULL, $id);

		}else {
			if($this->Surveyexport->save($this->data)){
				$this->Session->setFlash('Update successful');
				//$this->redirect(array('action'=>'view', $id)); //redirect and let user view updates
					
			}else{
				$this->Session->setFlash('Update failed!!!');
			}
		}

		$toPass=$this->data=$this->Surveyexport->read(NULL, $id);
		$this->set('passedRecord', $toPass); // pass the record for display

	}

	function view($id = Null){
		$toPass=$this->data=$this->Surveyexport->read(NULL, $id);
		$this->set('passedRecord', $toPass); // pass the record for display
		$this->set('idPassed', $id); // set this for the view to send to edit if desired by the user.
		//if($_POST['passedID']!=''){
		//		$this->redirect('view/'.$_POST['id']);
		//}
	}


	function adhocreports() {
	
	}
	function recordfinderhome(){
		// page to select criteria to find by
		if(!empty($this->params['form']))
		{
			if($_POST['id']!=''){
				$this->redirect('view/'.$_POST['id']);
			}
				
		}

	}
	/**
	 *
	 * Enter description here ...
	 * @param unknown_type $paramArray - Used to find all items listed in a conditional statement
	 */
	function recordfinder($searchFor, $conditionsArray){
		//determine the lenght of the array to determine which find function to use, we need to limit this

		// to start just use patient id to find
		$recordFound= $this->Surveyexport->find('all', array('conditions'=>array('id ='=>$searchFor)));// value is used ot identify each iterations elements
		// value is used ot identify each iterations elements
		$this->set('recordToEdit', $recordFound); // set the variable in recordfinder
	}

}



<p></br></p>

<style type="text/css">
p.tableSection{float:left;}
div.ex
{
height:700px;
width:90%;
padding:10px;
border:5px solid green;
margin:0px;
overflow:auto;

}
</style>
<style type="text/css">
 th
{
background-color:green;
color:white
}
td
{
horizontal-align:center;
text-align:center;
vertical-align:center;
}
tr
{
text-align:center;
align:center;

}
table
{
text-align:center;
}
</style>

<div class="ex">
<style type="text/css">
#reportdata
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#reportdata td, #customers th 
{
font-size:.9em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
text-align:left;
}
#reportdata th 
{
font-size:1.1em;
text-align:left;
padding-top:2px;
padding-bottom:2px;
padding-left:6px;
padding-right:6px;
background-color:#A7C942;
color:#ffffff;
}
#reportdata tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
</style>



















<?php

//echo "this is an element for the computer self efficacy report";
//echo "need clarification on this report";
//well, guess we start spitting out mass tables...

/**
		 * Brians field names - used for reference to identify the Name, Array variables
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

// table vars
$experienceWithComputersName;
$experienceWithComputersArray;
$confidentBrowsingTheIntenetName;
$confidentBrowsingTheIntenetArray;
$confidentSurfingTheIntenetName;
$confidentSurfingTheIntenetArray;
$confidentCreatingWebPageName;
$confidentCreatingWebPageArray;
$confidentChangingWebPageName;
$confidentChangingWebPageArray;
$confidentDownloadingFromAnotherComputerName;
$confidentDownloadingFromAnotherComputerArray;
$confidentScanningPicturesToSaveName;
$confidentScanningPicturesToSaveArray;
$confidentRecoveringDeletedFileName;
$confidentRecoveringDeletedFileArray;
$confidentFindingInformationOnInternetName;
$confidentFindingInformationOnInternetArray;
$likeWorkingWithComputersName;
$likeWorkingWithComputersArray;
$aspectsOfJobThatRequireComputerUseName;
$aspectsOfJobThatRequireComputerUseArray;
$onceStartedWorkingOnComputerHardToStopName;
$onceStartedWorkingOnComputerHardToStopArray;
$usingComputerIsFrustratingForMeName;
$usingComputerIsFrustratingForMeArray;
$boredQuicklyWorkingOnComputerName;
$boredQuicklyWorkingOnComputerArray;
$computersAreIntimidatingToMeName;
$computersAreIntimidatingToMeArray;
$feelAmprehensiveAboutUsingComputerName;
$feelAmprehensiveAboutUsingComputerArray;
$scaresMeToThinkICouldDelInfoIfIHitTheWrongKeyName;
$scaresMeToThinkICouldDelInfoIfIHitTheWrongKeyArray;
$hesitateToUseCpuFearOfMakingMistakeICantCorrectName;
$hesitateToUseCpuFearOfMakingMistakeICantCorrectArray;
// end table vars
// please... make it stop... >< .. 

echo "<p class='tableSection'>";

echo spitTableL($experienceWithComputersArray, $experienceWithComputersName);
echo spitTableL($confidentBrowsingTheIntenetArray, $confidentBrowsingTheIntenetName);
echo spitTableL($confidentSurfingTheIntenetArray, $confidentSurfingTheIntenetName);
echo spitTableL($confidentCreatingWebPageArray, $confidentCreatingWebPageName);
echo spitTableL($confidentChangingWebPageArray, $confidentChangingWebPageName);
echo spitTableL($confidentDownloadingFromAnotherComputerArray, $confidentDownloadingFromAnotherComputerName);
echo spitTableL($confidentScanningPicturesToSaveArray, $confidentScanningPicturesToSaveName);
echo spitTableL($confidentRecoveringDeletedFileArray, $confidentRecoveringDeletedFileName);
echo spitTableL($confidentFindingInformationOnInternetArray, $confidentFindingInformationOnInternetName);
echo spitTableL($likeWorkingWithComputersArray, $likeWorkingWithComputersName);
echo spitTableL($aspectsOfJobThatRequireComputerUseArray, $aspectsOfJobThatRequireComputerUseName);
echo spitTableL($onceStartedWorkingOnComputerHardToStopArray, $onceStartedWorkingOnComputerHardToStopName);
echo spitTableL($usingComputerIsFrustratingForMeArray, $usingComputerIsFrustratingForMeName);
echo spitTableL($boredQuicklyWorkingOnComputerArray, $boredQuicklyWorkingOnComputerName);
echo spitTableL($computersAreIntimidatingToMeArray, $computersAreIntimidatingToMeName);
echo spitTableL($feelAmprehensiveAboutUsingComputerArray, $feelAmprehensiveAboutUsingComputerName);
echo spitTableL($scaresMeToThinkICouldDelInfoIfIHitTheWrongKeyArray, $scaresMeToThinkICouldDelInfoIfIHitTheWrongKeyName);
echo spitTableL($hesitateToUseCpuFearOfMakingMistakeICantCorrectArray, $hesitateToUseCpuFearOfMakingMistakeICantCorrectName);

echo "</p>";


function spitTableL($columnArray, $columnName){
echo "<table border=4 cellspacing=5 align='left' style='margin-left:auto;margin-right:auto;background-color:white;'>";
		// table level variables
		
		
		
		$totalRecordCount=arrayCounter($columnArray);// perform a calculation to identify the sum of all records, to be used for percentages of referrals
		$count=0;
		//echo "  Total Records (N) = " . $totalRecordCount;
		$firstPassBoolean=true;
		foreach ($columnArray as $value)
		{
		if($firstPassBoolean==true){
		echo "<tr><th>".$columnName."</th><th> % Of Total </th><th>N = ".$totalRecordCount." </th></tr>"; // set up headers
		$firstPassBoolean=false;
		}
			$percentage=($value[1]/$totalRecordCount)*100;
			//echo "<tr><td>".$value[0][$columnName]."</td><td>".$value[1]."</td><td>".$percentage."% </td></tr>";
			echo "<tr><td>".$value[0][$columnName]."</td><td>".$percentage." % Of Total</td><td>n= ".$value[1]." </td></tr>";
			$itemName=$value[0][$columnName];
			$fileWriteSuccess=file_put_contents('currentReport.csv',$itemName.", ". $value[1] .", " .$percentage .", " , FILE_APPEND );
			//echo $fileWriteSuccess;
			$count++;
		}

		echo "</table>";

}

?>
<?php 
$currentCell = $_GET[$currentCell];
$lineCount = $_GET[$lineCount];; 
$cellNumber = $_GET[$cellNumber];;

 class troublemaker{

  function checkVerify($InformationVerified)
	{
		if ($InformationVerified==false){// the data has failed verification, there is no point in checking anything else... so break and throw an exception
		//throwError(new Exception("Data failed verification at cell " .$cellNumber." .  In row " . $lineCount.".")); // going to avoid exceptions, maybe a better way is to make an array of error locations for fixing
			echo "<p style='font-family:arial;color:red;font-size:14px;'>  Error parsing value :<b> " .$currentCell   . "</b> in cell number " .$cellNumber ." in row number " . $lineCount ." .  Please correct the value in the csv file and resubmit!</p>";
		}else{
			echo " <br/><B>Row ".$lineCount." / Cell ".$cellNumber." has passed verification!</B><br/>";
		}
	}



// fucntion to check x's in the database(which are converted to booleans
function checkX($currentCell,$lineCount,$cellNumber){ // CHECK 17, 18
	$a = array('X','x',''); //echo "checking for an X";
	$cellPassesInspection=false; // assume the cell does not pass inspection
	$cellPassesInspection=in_array($currentCell, $a);
	if ($cellPassesInspection==false){// the data has failed verification, there is no point in checking anything else... so break and throw an exception
//	throwError(new Exception("Data failed verification at cell " .$cellNumber." .  In row " . $lineCount.".")); // going to avoid exceptions, maybe a better way is to make an array of error locations for fixing
	echo "<p style='font-family:arial;color:red;font-size:14px;'>  Error parsing value :<b> " .$currentCell   . "</b> in cell number " .$cellNumber ." in row number " . $lineCount ." .  Please correct the value in the csv file and resubmit!</p>";
	return false;
	}else{
	echo " <br/><B>Row ".$lineCount." / Cell ".$cellNumber." has passed verification!</B><br/>";
	return true;
		}
	}
// used for insertion into the database to do a boolean conversion CHECK 17, 18
function isX($checkMe){
	if($checkMe=="X"){
		return true; // return true if there's an X
	}else{
		return false; // return false if the cell is blank
	}
}
// function to throw an exception during checks, this goes inside a catch block
function throwError($exceptionItem){
	echo "
	
	<p style='font-family:arial;color:red;font-size:20px;'>  Error parsing :   . $exceptionItem->error_message  
	
	</p>"; // catch this in the parse method and do $e->getMessage() to show it.

	//break; // try and break the current loop


}

// this function CHECK 19,20, 22 issue here is the result contains an other field so this SHOULD NOT have a FK relationship in the tables, the best we can do is check strings
function checkStringLength($checkMe){
	// for now just ensure it's a string and cut it if it's too long
	global $STRING_LIMIT;
	if(sizeof($checkMe)<$STRING_LIMIT){
		// if the string is shorter than the limit return true for a good check
		return true;
	}else{
		return false;
		// after this return the snipString method should be called to cut off the string shorter(CLIENT APPROVAL NEEDED) !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

	}

}
// this is part two of CHECK 19, 20
function snipString($checkMe){ // cuts the string to an acceptable size for the database
	$newString=	substr($checkMe, 0, $STRING_LIMIT); // this may throw an error if the end can't be longer than the string
	return $newString; // return the clipped string for database insert
}

// this is check for 21 how long with diabetes CHECK 21
/**
 * OPTIONS
 * ( ) 0-5 years
 ( ) >5-10 years
 ( ) >10-15 years
 ( ) >15-20 years = " >15-20 years " in excel/csv

 ( ) >20 years
 */

function checkHowLongWithDiabetes($checkMe){
	// an ugly if statement , there may be return characters (\n) in this code !!!!!!!!!!!!!!!!!!!!! check.
	if($checkMe=="0-5 years" || $checkMe==">5-10 years" || $checkMe==">10-15 years"|| $checkMe==">10-15 years"||$checkMe==">15-20 years"||$checkMe==">20 years"){
		// if any of the correct answers exists return true for good check
		return true;
	}else{
		return false; // incorrect data here, consider throwing an exception relating to data was modified before a parse ie: fat finger change

	}

}

//CHECK 22 - this is a string check use checkstringlength method

//CHECK 23, 24, 25 - this checks for types of injections and treatments
/**
 * OPTIONS
 * [ ] Pills
 [ ] One Insulin shot
 [ ] More than one insulin shot
 [ ] Insulin pump
 [ ] Other injections
 [ ] None
 */
// there may be return characters again... !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! check.
function checkTreatment($checkMe){
	if($checkMe==""||$checkMe=="Pills"|| $checkMe=="None" || $checkMe == "More than one insulin shot" || $checkMe=="One Insulin shot" || $checkMe=="Insulin pump" || $checkMe=="Other injections"){

		// one of the acceptable reponses was found, return true
		return true;
	}else{
		//no acceptable response
		return false;

	}
}

//CHECK 26
/**
 * OPTIONS
 * ( ) None
 *( ) Very limited
 ( ) Some experience
 ( ) Quite a lot
 ( ) Extensive
 *
 *
 *
 */
// TEST ????????????????????????????????????????????????????????????????????????????????????????????????  the value None never appears in the spreadsheat, this version is assumed
function checkExperienceWithComputers($checkMe){
	if($checkMe=="Some experience" || $checkMe=="Quite a lot" || $checkMe=="Extensive" || $checkMe=="Very limited"|| $checkMe=="None" ){
		// an acceptable response has been found return true
		return true;
	}else{
		// no acceptable response
		return false;
	}

}

// check 27, 28, 29, 30, 31,32,33, 34,35,36,37,38,39,40,41,42,43 -- these checks are for the strongly agree to strongly disagree questions
/**
 *
 * 1 - Strongly Disagree
 2 - Disagree
 3 - Neither Disagree nor Agree
 4 - Agree
 5 - Strongly Agree = 5 - Strongly Agree in excel


 *
 *
 */
//CHECK 27 -- !!!!!!!!!!!!! may have return characters in cells
function checkRangedQuestions($currentCell,$lineCount,$cellNumber)
{
	$a = array('1 - Strongly Disagree','2 - Disagree','3 - Neither Disagree nor Agree','4 - Agree','5 - Strongly Agree'); 
	$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
		if ($InformationVerified==false){// the data has failed verification, there is no point in checking anything else... so break and throw an exception
									//throwError(new Exception("Data failed verification at cell " .$cellNumber." .  In row " . $lineCount.".")); // going to avoid exceptions, maybe a better way is to make an array of error locations for fixing
		echo "<p style='font-family:arial;color:red;font-size:14px;'>  Error parsing value :<b> " .$currentCell   . "</b> in cell number " .$cellNumber ." in row number " . $lineCount ." .  Please correct the value in the csv file and resubmit!</p>";
		}else{
		echo " <br/><B>Row ".$lineCount." / Cell ".$cellNumber." has passed verification!</B><br/>";
		}
}


/**
 * Checks if cell is an integer
 * @param Int $checkMe a valid integer
 * @throws Excepttion
 * @return True or False
 */
function checkIfInt($checkMe){
	if(is_Int((int)$checkMe) == true){
		return true;
		// an acceptable respne
	}else{
		return false;
	}
	
}
/**
 * 
 * Checks if string passed is a valid state
 * @param String $checkMe a State passed in String format
 * @throws Exception
 * @return True or False
 */
function checkIfState($checkMe){
	$states = array("Alabama", "Alaska", "American Samoa", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Iowa", "Delaware", "District of Columbia", "Federated States of Micronesia", 
	"Florida", "Georgia", "Guam", "Hawaii", "Idaho", "Illinois", "Indiana", "Kansas", "Kentucky", "Louisiana", "Maine", "Marshall Islands", "Maryland", "Massachusetts", 
	"Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",
	"North Dakota", "Northern Mariana Islands", "Ohio", "Oklahoma", "Oregon", "Palau", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", 
	"Tennessee", "Texas", "Utah", "Vermont", "Virgin Islands", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"); 
	
	if(in_array($checkMe, $states) == true){
		return true;
	}else{
		return false;
	}

}

/**
 * Checks if string passed is a valid Yes or No
 * @param String $checkMe Yes or No in string format
 * @throws Exception
 * @return True or False
 */
function checkIfYN($checkMe){
	if($checkMe == 'Yes' || $checkMe == 'No' || $checkMe == ''){
		return true;
	}else{
		return false;
	}
}

/**
 * 
 * Checks if the date entered is valid
 * @param $checkMe String Date in string format
 * @throws Exception
 * @return True or False
 */
function checkIfDate($checkMe){
	if ($checkMe == '') {return true;};
	
	$monthNum = 0;
	
	list($day, $month, $year) = split('-', $checkMe);
	if($month == 'Jan'){
		$monthNum = 1;
	}elseif($month == 'Feb'){
		$monthNum = 2;
	}elseif($month == 'Mar'){
		$monthNum = 3;
	}elseif($month == 'Apr'){
		$monthNum = 4; 
	}elseif($month == 'May'){
		$monthNum = 5;
	}elseif($month == 'Jun'){
		$monthNum = 6;
	}elseif($month == 'Jul'){
		$monthNum = 7;
	}elseif($month == 'Aug'){
		$monthNum = 8;
	}elseif($month == 'Sep'){
		$monthNum = 9;
	}elseif($month == 'Oct'){
		$monthNum = 10;
	}elseif($month == 'Nov'){
		$monthNum = 11;
	}elseif($month == 'Dec'){
		$monthNum = 12;
	}
	
	$daynum = (int)$day;
	$yearnum = (int)$year;
	
	if(checkdate($monthNum, $daynum, $yearnum) == true){
		return true;
	}else{
		return false;
	}	
}
  
  }
?>
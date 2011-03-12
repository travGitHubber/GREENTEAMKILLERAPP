<html>
<style>
body {
	font-size: smaller;
}

td {
	font-family: Arial;
	font-size: 7pt;
}
</style>
<body>

<?php
$currentCell;
$lineCount;
$cellNumber;

// all ???????????? should be tested
// all !!!!!!!!!!!!!!! may be problem areas

$STRING_LIMIT=100; // this is the field limit on a string value for the database, here for easy adjustment

define('MAX_CSV_LINE_LENGTH', 7000);
//Uses fgetcsv() to parse a CSV file.
function csvParseFile($filename, $separator = "\n") {
	$headerCount; // this is a count of all headers, headers MUST be clean in the initial import, this value is used to determine if a row has too many elements which indicates a comma error in the source data.
	$fp = fopen($filename, 'r');
	$endPatientIDBoolean = false; // used to decide if no more patient records are present, set to true that it IS THE END OF THE PATIENT RECORDS and parsing should stop.

	$verifiedArrayForInput;

	if ($fp === false) {
		return false;
	}
	$istrue = false;
	$result = array();


	$lineCount=0;
	// travs loop
	echo "<table border='2'>";
	if($endPatientIDBoolean==false){
		do{

			$line = fgetcsv($fp, MAX_CSV_LINE_LENGTH, $separator);
			array_push($result, $line);
			$underTenK="Under $10,000";
			$tenK="$10,000- $29,000";
			$thirtyK="$30,000- $59,000";
			$sixtyK="$60,000- $99,999";
			$hundredK="$100,000 and above";
			//replace values
			$fixUnderTenK="Under $10000";
			$fixTenK="$10000- $29000";
			$fixThirtyK="$30000- $59000";
			$fixSixtyK="$60000- $99000";
			$fixHundredK="$100000 and above";
			//search and DESTROY
			$line[0]=str_ireplace($underTenK, $fixUnderTenK, $line[0]);
			$line[0]=str_ireplace($tenK, $fixTenK, $line[0]);
			$line[0]=str_ireplace($thirtyK, $fixThirtyK, $line[0]);
			$line[0]=str_ireplace($sixtyK, $fixSixtyK, $line[0]);
			$line[0]=str_ireplace($hundredK, $fixHundredK, $line[0]);

			//echo out the row string
			if($lineCount==0){
				echo "</br>";
				echo "<b> HEADERS </b>";
				echo "</br>";
				echo $line[0];
				// assign the header count
				$count=split(',', $line[0]);
				$headerCount=count($count)-1; // for some reason this is 2 off
				echo "</br></br>THIS IS THE HEADER COUNT  " .$headerCount;
				$lineCount++;
			}else{
					
				$InformationVerified=false; // switch this to true if it passes all verifications
					
				echo "</br>";
//				if(substr($line[0], 0,1) != ',') {echo 'what the hell';
				
				echo "<b> RECORD NUMBER  ". $lineCount. "</b>";
				echo "</br>";
				echo $line[0]. "   ELEMENT COUNT:  " . sizeof($line[0]);
				
				// segment into cell data
				$splitCell;
				$cellNumber=0;
				
				//clean the stupid commas out of the monetary values
				/**
				 * clean the following values
				 *
				 * ( ) Under $10,000
				 ( ) $10,000- $29,000
				 ( ) $30,000- $59,000
				 ( ) $60,000- $99,999
				 ( ) $100,000 and above
				 ( ) I prefer not to disclose
				 *
				 *
				 *
				 */


				// need to stop this at element 47(46 in code) because of the 27,<=stupid comma 000 issue
				$splitCell = split(',', $line[0]); // we may need to NOT use split, has no escape characters like " lasdjfa;sdfj, , , "

				echo "  split cell amount " . sizeof($splitCell);
//				}
				echo "<tr>"; // spit out a row for all cells

				// before doing anything make sure the count matches header number if it's larger a comma is in the input that shouldn't be (this means the row is of irregular size = very bad.
					
				if(count($splitCell)>$headerCount){
					// very bad things have happened and there's a dumb comma somewhere like in CITY!!!
					echo" </br></br></br></br></br><p><big>KABLOOIE!!  Your program encountered an error.. enjoy the ride on the fail boat \-()--/";
					throw new Exception("The input file has a misplaced comma in record : " . ($lineCount+1));
					echo"</p></br></br></br></br>";
				}else{
					$cellCount=0;
					foreach ($splitCell as $currentCell){

						//perform checking on the first cell to determine if no more patient ids are present
						if(($currentCell=="" && $cellCount==0)||$endPatientIDBoolean==true){

							// this indicates an empty id field, meaning no more patient records are present
							$endPatientIDBoolean = true;

						}else{ // this indicates we are not at the end of the patient list so spit stuff out

													//User ID Check
							if($cellNumber==0) { //0 is really 1 due to 0 factor
								$InformationVerified=checkIfInt($currentCell); // perform a check to ensure if Int or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//Date Updated Check
							if($cellNumber==1) { //1 is really 2 due to 0 factor
								$InformationVerified=checkIfDate($currentCell); // perform a check to ensure if valid date or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}							

							//Date Added Check
							if($cellNumber==2) { //2 is really 3 due to 0 factor
								$InformationVerified=checkIfDate($currentCell); // perform a check to ensure if valid Date or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//Focus_ID Check
							if($cellNumber==3) { //3 is really 4 due to 0 factor
								$InformationVerified=checkIfInt($currentCell); // perform a check to ensure if Int or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//Participant Date 1/2 check
							if($cellNumber==4 || $cellNumber == 5) { //4/5 is really 5/6 due to 0 factor
								$InformationVerified=checkIfDate($currentCell); // perform a check to ensure if valid Date or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//State Check
							if($cellNumber==6) { //6 is really 7 due to 0 factor
								$InformationVerified=checkIfState($currentCell); // perform a check to ensure if State or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//City Check
							if($cellNumber==7) { //7 is really 8 due to 0 factor
								$InformationVerified=checkStringLength($currentCell); // perform a check to ensure if valid string
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//Referal check
							if($cellNumber==8) { //8 is really 9 due to 0 factor
								$InformationVerified=checkStringLength($currentCell); // perform a check to ensure if valid string
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//Computer/Internet check
							if($cellNumber==9) { //9 is really 10 due to 0 factor
								$InformationVerified=checkIfYN($currentCell); // perform a check to ensure if Yes or No
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
							//Smartphone check
							if($cellNumber==10) { //10 is really 11 due to 0 factor
								$InformationVerified=checkIfYN($currentCell); // perform a check to ensure if Yes or No
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}

							//Kind of phone check
							if($cellNumber==11) { //11 is really 12 due to 0 factor
								$InformationVerified=checkStringLength($currentCell); // perform a check to ensure if valid string
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							
						$number = array (12,13,14,15,16,17);//check
						if(in_array($cellNumber, $number)==true) { //32 is really 33 due to 0 factor
						$InformationVerified=checkX($currentCell,$lineCount,$cellNumber);
						}
						//check 19
						if($cellNumber==18) { //18 is really 19 due to 0 factor
								$InformationVerified=checkStringLength($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 20
							if($cellNumber==19) { //19 is really 20 due to 0 factor
								$InformationVerified=checkStringLength($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 21
							if($cellNumber==20) { //20 is really 21 due to 0 factor
								$InformationVerified=checkHowLongWithDiabetes($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 22
							if($cellNumber==21) { //21 is really 22 due to 0 factor
								$InformationVerified=checkStringLength($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 23
							if($cellNumber==22) { //22 is really 23 due to 0 factor
								$InformationVerified=checkTreatment($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 24
							if($cellNumber==23) { //23 is really 24 due to 0 factor
								$InformationVerified=checkTreatment($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 25
							if($cellNumber==24) { //24 is really 25 due to 0 factor
								$InformationVerified=checkTreatment($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 26
							if($cellNumber==25) { //25 is really 26 due to 0 factor
								$InformationVerified=checkExperienceWithComputers($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
						$number = array (26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42);//check
						if(in_array($cellNumber, $number)==true) { //32 is really 33 due to 0 factor
						checkRangedQuestions($currentCell,$lineCount,$cellNumber);
						}
						
						if($cellNumber==43) {
							$a = array('Male','Female'); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						if($cellNumber==44) {
							$a = array('1901-1924','1925-1945', '1946-1964', '1965-1983', '1984-2000'); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						if($cellNumber==45) {
							$a = array('Less than High School','High School or GED', 'Some College', "Bachelor's Degree", 'Advanced Degree'); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						if($cellNumber==46) {
							$a = array('"Under $10000"','"$10000- $29000"', '"$30000- $59000"', '"$60000- $99000"', '"$60000- $99999"', '"$100000 and above"', 'I prefer not to disclose'); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						if($cellNumber==47) {
							$a = array('Married','Single', 'Married with children under age 18'); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						if($cellNumber==48) {
							$a = array('Household with members 65 and over','Household with one or more full-time workers', 'Other', ''); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						
						if($cellNumber==49) 
						{
							$a = array('Household with members 65 and over','Household with one or more full-time workers', 'Other', ''); 
							$InformationVerified=in_array($currentCell, $a); // perform a check to ensure x or not, this will need to use the isX method to convert to bool after
							checkVerify($InformationVerified,$lineCount,$cellNumber);
						}
						
						//spit out the splits
						//echo "	<td style='color:green;'>"; // start all table data as green
						//echo "<td>";

						if($InformationVerified==false){
							echo "	<td style='color:red;<td style='color:red;'>"; // red for there's an issue with the data
							}else{
							// draw the cell green
							echo "	<td style='color:green;'>"; // green for good in the table
							}
							if ($currentCell == '') {$currentCell = 'Null';}
							echo $currentCell;
							echo "</td>";
							$cellCount++;
						}
						$cellNumber++; // increase the cell we are looking at
					}
				}
				echo"</tr>"; // end row
				$lineCount++;
			}

		}while($line[0]!=""&&$endPatientIDBoolean==false);
	}
	echo "</table>";
	echo "</br>";

	fclose($fp);

	return $result;
}

csvParseFile("CleanedRAWCSV.csv");

// #######################################################################################   CHECKER FUNCTIONS  ############################################################
function checkVerify($InformationVerified,$lineCount,$cellNumber)
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
// ####################################################################################### --END--  CHECKER FUNCTIONS --END-- ########################################
//$array = csvParseFile("rawData.csv", "\t");

//print_r($array);
?>
</body>
</html>

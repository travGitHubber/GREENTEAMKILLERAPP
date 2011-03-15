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

include "joel.php";

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
			
				echo "</br>";
				echo "<b> RECORD NUMBER  ". $lineCount. "</b>";
				echo "</br>";
				echo $line[0]. "   ELEMENT COUNT:  " . sizeof($line[0]);
				// segment into cell data
				$splitCell;
				$cellNumber=0;
				echo "<tr>"; // spit out a row for all cells
				
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

	//			echo "  split cell amount " . sizeof($splitCell);
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
						//spit out the splits
						echo "<td>";
						if($cellCount ==18)
						{
						$a = array('Family Practice Physician','Endocrinologist','joel','george','fred','mom'); 
						echo in_array($currentCell, $a) . 'joel';  
				//		echo in_array("1", $a); // returns true 
				//		echo in_array("1", $a); // returns false 
				//		echo 'joel';
						}
						echo $currentCell;
						echo "</td>";

						$cellCount++;










						///Travis code 17-33

						//check 17
						if($cellNumber==16) { //16 is really 17 due to 0 factor




						}
						//check 18
						if($cellNumber==17) { //17 is really 18 due to 0 factor




						}
						//check 19
						if($cellNumber==18) { //18 is really 19 due to 0 factor




						}
						//check 20
						if($cellNumber==19) { //19 is really 20 due to 0 factor




						}
						//check 21
						if($cellNumber==20) { //20 is really 21 due to 0 factor




						}
						//check 22
						if($cellNumber==21) { //21 is really 22 due to 0 factor




						}
						//check 23
						if($cellNumber==22) { //22 is really 23 due to 0 factor




						}
						//check 24
						if($cellNumber==23) { //23 is really 24 due to 0 factor




						}
						//check 25
						if($cellNumber==24) { //24 is really 25 due to 0 factor




						}
						//check 26
						if($cellNumber==25) { //25 is really 26 due to 0 factor




						}
						//check 27
						if($cellNumber==26) { //26 is really 27 due to 0 factor




						}
						//check 28
						if($cellNumber==27) { //27 is really 28 due to 0 factor




						}
						//check 29
						if($cellNumber==28) { //28 is really 29 due to 0 factor




						}
						//check 30
						if($cellNumber==29) { //29 is really 30 due to 0 factor




						}
						//check 31
						if($cellNumber==30) { //30 is really 31 due to 0 factor




						}
						//check 32
						if($cellNumber==31) { //31 is really 32 due to 0 factor




						}
						//check 33
						if($cellNumber==32) { //32 is really 33 due to 0 factor




						}


					}



					$cellNumber++; // increase the cell we are looking at


				}



			}


			echo"</tr>"; // end row





			$lineCount++;
		}
		// TRAVIS CODE FIELDS 17-33

		
		
	}while($line[0]!=""&&$endPatientIDBoolean==false);
	}
	echo "</table>";
	echo "</br>";
				
	fclose($fp);

	return $result;
}

csvParseFile("CleanedRAWCSV.csv");

























// #######################################################################################   CHECKER FUNCTIONS  ############################################################
// fucntion to check x's in the database(which are converted to booleans
function  checkX($checkMe){ // CHECK 17, 18
	$cellPassesInspection=false; // assume the cell does not pass inspection
	if($checkMe=="X" || $checkMe==""){
		// the check has returned true that the passed item is an X or an empty cell, either is fine.
		$cellPassesInspection=True;
		return $cellPassesInspection;

	}else{
		return $cellPassesInspection; // default is false, this means the cell did not pass inspection
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
	throw new Exception("Error parsing at ..." . $exceptionItem); // catch this in the parse method and do $e->getMessage() to show it.

}

// this function CHECK 19,20, 22 issue here is the result contains an other field so this SHOULD NOT have a FK relationship in the tables, the best we can do is check strings
function checkStringLength($checkMe){
	// for now just ensure it's a string and cut it if it's too long
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
	if($checkMe=="Pills"|| $checkMe=="None" || $checkMe == "More than one insulin shot" || $checkMe=="One Insulin shot" || $checkMe=="Insulin pump" || $checkMe=="Other injections"){

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
function checkRangedQuestions($checkMe){

	if($checkMe=="1 - Strongly Disagree" ||$checkMe=="2 - Disagree" ||$checkMe=="3 - Neither Disagree nor Agree" ||$checkMe=="4 - Agree" ||$checkMe=="5 - Strongly Agree" ){
		// an acceptable response was found
		return true;
	}else{
		return false;
		// no acceptable response
	}


}

// ####################################################################################### --END--  CHECKER FUNCTIONS --END-- ########################################




//$array = csvParseFile("rawData.csv", "\t");

//print_r($array);
?>
</body>
</html>

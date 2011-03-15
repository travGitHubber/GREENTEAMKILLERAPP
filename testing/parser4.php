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
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//echo $_FILES['csvfile']['name']; // testing
$csvFile=$_FILES['csvfile']['name'];// this is the file passed from the html input form
if(is_file($csvFile)&&is_readable($csvFile)&&filesize($csvFile)>0)// test all issues with the file !!!!!!!!!!!!!!!!!!!!!! must add a custom method to check for .csv extension
{
	$STRING_LIMIT=100; // this is the field limit on a string value for the database, here for easy adjustment
	define('MAX_CSV_LINE_LENGTH', 7000);
	$currentCell;
	$lineCount;
	$cellNumber;
	csvParseFile($csvFile);
}else
{
//report the file as unacceptable
echo "

<script type='text/javascript'>
function goBack()
  {
  window.history.back()
  }
</script>

"; // end script
echo "<center><h1>Error Loading file, please ensure the file is a .csv file and is readable.</h1><br/><input type='button' value='Take Me back to the Database Input Page' onclick='goBack()' /></center>"	;
	
}
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//<?php echo htmlentities($_SERVER['PHP_SELF']);


// all ???????????? should be tested
// all !!!!!!!!!!!!!!! may be problem areas


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
			$line[0] = removeTheCommas($line); //removes the commas from the cash amounts found in the csv
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
				echo "<b> RECORD NUMBER  ". $lineCount. "</b>";
				echo "</br>";
				echo $line[0]. "   ELEMENT COUNT:  " . sizeof($line[0]);

				// segment into cell data
				$splitCell;
				$cellNumber=0;

				// need to stop this at element 47(46 in code) because of the 27,<=stupid comma 000 issue
				$splitCell = split(',', $line[0]); // we may need to NOT use split, has no escape characters like " lasdjfa;sdfj, , , "

				echo "  split cell amount " . sizeof($splitCell);
				//				}
				echo "<tr>"; // spit out a row for all cells

				// before doing anything make sure the count matches header number if it's larger a comma is in the input that shouldn't be (this means the row is of irregular size = very bad.
					
				if(count($splitCell)>$headerCount){
					// very bad things have happened and there's a dumb comma somewhere like in CITY!!!
					echo" </br></br></br></br></br><p><big><h1 style='color:red;'>KABLOOIE!!  Your program encountered an error.. enjoy the ride on the fail boat!! </h1></br><center><img src='failboat.gif'/></center>";
					throw new Exception(" The input file has a misplaced comma in record : " . ($lineCount+1));
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
						if($cellNumber>=0 && $cellNumber<=5)
						{	
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
								
							//Participant Date
							if($cellNumber==4 || $cellNumber == 5) { //4/5 is really 5/6 due to 0 factor
								$InformationVerified=checkIfDate($currentCell); // perform a check to ensure if valid Date or not
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
						}		
						if($cellNumber>=6 && $cellNumber<=11)
						{	
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
						}		
						if($cellNumber>=12 && $cellNumber<=18)
						{	
							$number = array (12,13,14,15,16,17);//check
							if(in_array($cellNumber, $number)==true) { //32 is really 33 due to 0 factor
								$InformationVerified=checkX($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							//check 19
							if($cellNumber==18) { //18 is really 19 due to 0 factor
								$InformationVerified=checkStringLength($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
						}	
						if($cellNumber>=19 && $cellNumber<=25)
						{	
							//check 20
							if($cellNumber==19) { //19 is really 20 due to 0 factor
								$InformationVerified=checkStringLength($currentCell);
								checkExperienceWithComputers($checkMe);
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
						}
						if($cellNumber>=26 && $cellNumber<=42)
						{	
							$number = array (26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42);//check
							if(in_array($cellNumber, $number)==true) { //32 is really 33 due to 0 factor
								$InformationVerified=checkRangedQuestions($currentCell);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
						}
						if($cellNumber>=43 && $cellNumber<=49)
						{	
							if($cellNumber==43) {
								$a = array('Male','Female');
								$InformationVerified=in_array($currentCell, $a); 
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							if($cellNumber==44) {
								$a = array('1901-1924','1925-1945', '1946-1964', '1965-1983', '1984-2000');
								$InformationVerified=in_array($currentCell, $a); 
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							if($cellNumber==45) {
								$a = array('Less than High School','High School or GED', 'Some College', "Bachelor's Degree", 'Advanced Degree');
								$InformationVerified=in_array($currentCell, $a); 
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							if($cellNumber==46) {
								$a = array('"Under $10000"','"$10000- $29000"', '"$30000- $59000"', '"$60000- $99000"', '"$60000- $99999"', '"$100000 and above"', 'I prefer not to disclose');
								$InformationVerified=in_array($currentCell, $a); 
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							if($cellNumber==47) {
								$a = array('Married','Single', 'Married with children under age 18');
								$InformationVerified=in_array($currentCell, $a); 
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
							if($cellNumber==48) {
								$a = array('Household with members 65 and over','Household with one or more full-time workers', 'Other');
								$InformationVerified=in_array($currentCell, $a); 
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}

							if($cellNumber==49)
							{
								$a = array('Household with members 65 and over','Household with one or more full-time workers', 'Other', '');
								$InformationVerified=in_array($currentCell, $a);
								checkVerify($InformationVerified,$lineCount,$cellNumber);
							}
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
							if($currentCell == ''){$currentCell = 'Null';}
							echo '<center>'.$currentCell.'</center>';
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


//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ Method calls ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//csvParseFile("CleanedRAWCSV.csv");

// #######################################################################################   CHECKER FUNCTIONS  ############################################################
/**
 * Cleans the commas out of the monetary values
 * Cleans the following values
 * ( ) Under $10,000
 * ( ) $10,000- $29,000
 * ( ) $30,000- $59,000
 * ( ) $60,000- $99,999
 * ( ) $100,000 and above
 * ( ) I prefer not to disclose
 * @param Array $line Line Information from the csv file. 
 */
function removeTheCommas($line)
{
	for ($n = 0; $n < 5; $n++) 
	{
	$a = array("Under $10,000","10,000- $29,000", "30,000- $59,000","$60,000- $99,999","$100,000 and above");
	$b = array("Under $10000","10000- $29000", "30000- $59000","$60000- $99999","$100000 and above");
	$line[0]=str_ireplace($a[$n], $b[$n], $line[0]);
	}
	return $line[0];
}
/**
 *Displays the Row and Cell that has passed or Failed data verification!
 *@param $InformationVerified 	Boolean given by the data validation functions
 *@param $lineCount				Line number of the current CSV File	
 *@param $cellNumber			Cell number of the current CSV File
 */
function checkVerify($InformationVerified,$lineCount,$cellNumber)
{
	if ($InformationVerified==false) echo "<p style='font-family:arial;color:red;font-size:14px;'>  Error parsing value :<b> " .$currentCell   . "</b> in cell number " .$cellNumber ." in row number " . $lineCount ." .  Please correct the value in the csv file and resubmit!</p>";
	else echo " <br/><B>Row ".$lineCount." / Cell ".$cellNumber." has passed verification!</B><br/>";
}
/**
 *function to check x's in the database(which are converted to booleans}
 *Checks for X, x, or null
 *@param $currentCell is the current Cell being parsed 
 *@return True or False
 */
function checkX($currentCell)
{ 
	$a = array('X','x',''); //echo "checking for an X";
	$cellPassesInspection=false; // assume the cell does not pass inspection
	return $cellPassesInspection=in_array($currentCell, $a);
}
/**
 *  function to throw an exception during checks, this goes inside a catch block
 *  @param $exceptionItem 
 */
function throwError($exceptionItem)
{
	echo " <p style='font-family:arial;color:red;font-size:20px;'>  Error parsing :   . $exceptionItem->error_message </p>"; // catch this in the parse method and do $e->getMessage() to show it.
	//break; // try and break the current loop
}
// this function CHECK 19,20, 22 issue here is the result contains an other field so this SHOULD NOT have a FK relationship in the tables, the best we can do is check strings
function checkStringLength($currentCell)
{
	// for now just ensure it's a string and cut it if it's too long
	global $STRING_LIMIT;
	if(sizeof($currentCell)<$STRING_LIMIT) return true;
	else return false;
}
/**
 * Cuts the string in the cell to an acceptable size for the database
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return The acceptable size string for the database.
 */
function snipString($currentCell)
{ 
	$newString=	substr($currentCell, 0, $STRING_LIMIT); 
	return $newString; 
}
/**
 * Checks the data for cells dealing with How long with Diabetes for valid responses.
 * OPTIONS
 *[ ] 0-5 years
 *{ } >5-10 years
 *[ ] >10-15 years
 *[ ] >15-20 years = " >15-20 years " in excel/csv
 *[ ] >20 years
 *[ ] Blank
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False.
 */
function checkHowLongWithDiabetes($currentCell){
	$checkTreatment = array('','0-5 years','>5-10 years','10-15 years','>10-15 years','>15-20 years','>20 years');
	return $checkHowLongWithDiabetesChecker=in_array($currentCell, $checkTreatment); 
 }
/**
 *This checks cells dealing with types of injections and treatments
 *OPTIONS
 *[ ] Pills
 *[ ] One Insulin shot
 *[ ] More than one insulin shot
 *[ ] Insulin pump
 *[ ] Other injections
 *[ ] None
 *[ ] Blank
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False
 */
function checkTreatment($currentCell)
{
	$checkTreatment = array('','Pills','None','More than one insulin shot','One Insulin shot','Insulin pump','Other injections');
	return $checkTreatmentChecker=in_array($currentCell, $checkTreatment); 
}
/**
 * This checks the values dealing with Experience with computers.
 * the value None never appears in the spreadsheat, this version is assumed
 * OPTIONS
 *[ ] None
 *[ ] Very limited
 *[ ] Some experience
 *[ ] Quite a lot
 *[ ] Extensive
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False
 */
function checkExperienceWithComputers($currentCell)
{
	$checkExperienceWithComputers = array('Some experience','Quite a lot','Extensive','Very limited','None');
	return $checkExperienceWithComputersChecker=in_array($currentCell, $checkExperienceWithComputers); 
}
/**
 * Checks the data for cells dealing with strongly agree to strongly disagree questions
 * OPTIONS
 *( )1 - Strongly Disagree
 *( )2 - Disagree
 *( )3 - Neither Disagree nor Agree
 *( )4 - Agree
 *( )5 - Strongly Agree = 5 - Strongly Agree in excel
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False.
 */
function checkRangedQuestions($currentCell)
{
	$a = array('1 - Strongly Disagree','2 - Disagree','3 - Neither Disagree nor Agree','4 - Agree','5 - Strongly Agree');
	return $checkRangedQuestionsChecker=in_array($currentCell, $a); 
}
/**
 * Checks if cell is an integer
 * @param Int $currentCell a valid integer
 * @throws Excepttion
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False
 */
function checkIfInt($currentCell)
{
	if(is_Int((int)$currentCell) == true) return true;
	else return false;
}
/**
 * Checks if string passed as a valid state
 * @param String $currentCell a State passed in String format
 * @throws Exception
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False
 */
function checkIfState($currentCell)
{
	$states = array("Alabama", "Alaska", "American Samoa", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Iowa", "Delaware", "District of Columbia", "Federated States of Micronesia",
	"Florida", "Georgia", "Guam", "Hawaii", "Idaho", "Illinois", "Indiana", "Kansas", "Kentucky", "Louisiana", "Maine", "Marshall Islands", "Maryland", "Massachusetts", 
	"Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",
	"North Dakota", "Northern Mariana Islands", "Ohio", "Oklahoma", "Oregon", "Palau", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", 
	"Tennessee", "Texas", "Utah", "Vermont", "Virgin Islands", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"); 
	return in_array($currentCell, $states);
}
/**
 * Checks if string passed is a valid Yes or No
 * @param String $currentCell Yes or No in string format
 * @throws Exception
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False
 */
function checkIfYN($currentCell)
{
	if($currentCell == 'Yes' || $currentCell == 'No' || $currentCell == '') return true;
	else return false;
}
/**
 * Checks if the date entered is valid
 * @param $currentCell String Date in string format
 * @throws Exception 
 * @param cell $currentCell This is the current cell of the data in the csv file.
 * @return True or False
 */
function checkIfDate($currentCell)
{
	if ($currentCell == '') {return true;};
	$months = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'); 
	list($day, $month, $year) = split('-', $currentCell);
	$n = 0;
	while ($month != $months[$n]) $n++;
	$monthNum = $n+1;
	$daynum = (int)$day;
	$yearnum = (int)$year;
	Return checkdate($monthNum, $daynum, $yearnum);
}
// ####################################################################################### --END--  CHECKER FUNCTIONS --END-- ########################################
//$array = csvParseFile("rawData.csv", "\t");

//print_r($array);
?>
</body>
</html>

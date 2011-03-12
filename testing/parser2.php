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
		echo $line[0];

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
				
				// need to stop this at element 47(46 in code) because of the 27,<=stupid comma 000 issue
				$splitCell = split(',', $line[0]); // we may need to NOT use split, has no escape characters like " lasdjfa;sdfj, , , "

				echo "  split cell amount " . sizeof($splitCell);
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
						if($currentCell ==17){echo 'joel';}
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

//	return $result;
}

csvParseFile("CleanedRAWCSV.csv");


?>
</body>
</html>

<?php //@author Travis Bloomquist ?>
<style type="text/css">
div.ex {
	height: 700px;
	width: 1000px;
	padding: 10px;
	border: 5px solid green;
	margin: 0px;
	overflow: auto;
}
</style>

<p>
	<b>Distinct Referrals Report.</b>
</p>
<div class="ex">
	<style type="text/css">
#reportdata {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	width: 100%;
	border-collapse: collapse;
}

#reportdata td,#customers th {
	font-size: .9em;
	border: 1px solid #98bf21;
	padding: 3px 7px 2px 7px;
	text-align: center;
}

#reportdata th {
	font-size: 1.1em;
	text-align: center;
	padding-top: 2px;
	padding-bottom: 2px;
	padding-left: 6px;
	padding-right: 6px;
	background-color: #A7C942;
	color: #ffffff;
}

#reportdata tr.alt td {
	color: #000000;
	background-color: #EAF2D3;
}
</style>
	<table id="reportdata">
		<p>		
		<h1>Referral Report</h1>
		</p>
		<?php
		// area to display reports

		$surveyexports;
		$Surveyexport;
		$totalRecordCount;
		//field array, this is an array of counts for specific fields by report
		$referralData; // this is an array of DISTINCT ID's, DISTINCT focus ID, Record count(calculated)
		
		// FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF		
		$currentReportFile=fopen('currentReport.csv', 'w');
				
		// FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
		

		//print_r($totalCount[1][1]); // for debugging
		//debug($totalCount); // for debugging

		//echo "<br/>size of variable   ".sizeof($totalCount);
		
		//debug($referralData); // for testing
		//print_r($referralData); // for testing
		//table to encompass text and table versions
		echo "<table border=4 cellspacing=5 cellpadding=5><tr><td>";
		echo "<table border=4 cellspacing=5>";
		// perform a calculation to identify the sum of all records, to be used for percentages of referrals
		$totalRecordCount=arrayCounterX($referralData);
		$count=0;
		echo "  test:  totalcount value = " . $totalRecordCount;
		foreach ($referralData as $value)
		{
			$percentage=($value[1]/$totalRecordCount)*100;
			echo "<tr><td>".$value[0]['referal']."</td><td>".$value[1]."</td><td>".$percentage."% </td></tr>";
			$itemName=$value[0]['referal'];
			$fileWriteSuccess=file_put_contents('currentReport.csv',$itemName.", ". $value[1] .", " .$percentage .", " , FILE_APPEND );
			//echo $fileWriteSuccess;
			$count++;
		}

		echo "</table>";
		echo "</td><td>"; // throw next output in horizontal table beside the tabled output
		$count=0;
		foreach ($referralData as $value){


			echo "<p><h2 style='text-align:left'>Total by ".$referralData[$count][0]['referal'].": ". $referralData[$count][1] . "</h2></p>";
			$count++;//move on to next record
		}

		echo "</td></tr></table>";		
		fclose($currentReportFile);
		?>
	</table>

</div>
		<?php

		//counts all the arrays in my oddly shaped array
		function arrayCounterX($referralData){
			$sum=0;
			$count=0;
			foreach ($referralData as $value){
			$sum+=$referralData[$count][1]; // count all the totals for each type of referral
				$count++;


			}
				return $sum;

		}
		//appends each part of data to the csv file
		function offerFile($param){			
			
		}


?>


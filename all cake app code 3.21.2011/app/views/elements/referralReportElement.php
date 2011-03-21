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
	<b>Report of all data in the database currently.</b>
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


		//print_r($totalCount[1][1]); // for debugging
		//debug($totalCount); // for debugging

		//echo "<br/>size of variable   ".sizeof($totalCount);
		//if(sizeof($surveyexports!=0))
		//debug($referralData); // for testing
		//print_r($referralData); // for testing
		//table to encompass text and table versions
		echo "<table border=4 cellspacing=5 cellpadding=5><tr><td>";

		echo "<table border=4>";
		// perform a calculation to identify the sum of all records, to be used for percentages of referrals
		$totalRecordCount=arrayCounter($referralData);
		$count=0;
		echo "  test:  totalcount value = " . $totalRecordCount;
		
		// create the table of REFERRAL:AMOUNT:PERCENT
		foreach ($referralData as $value)
		{
			$percentage=$value[1]/$totalRecordCount;
			echo "<tr><td>".$value[0]['referal']."</td><td>".$value[1]."</td><td>$percentage  </td></tr>";
			$count++;
		}

		echo "</table>";
		echo "</td><td>"; // throw next output in horizontal table beside the tabled output
		$count=0;
		foreach ($referralData as $value){


			echo "<p><h2 style='text-align:left'>Total by ".$referralData[$count][0]['referal'].": ". $referralData[$count][1] . "</h2></p>";
			$count++;//move on to next record
		}


		//echo "<p><h2 style='text-align:left'>Total by ".$referralData[1][0]['referal'].": ". $referralData[$count][1] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by ".$referralData[2][0]['referal'].": ". $referralData[0][1] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by ".$referralData[3][0]['referal'].": ". $referralData[0][1] . "</h2></p>";

		//echo "<p><h2 style='text-align:left'>Total by Phone Call: ". $referralData[1][0] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by Website: ". $referralData[2][0] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by Flyer: ". $referralData[3][0] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by TCOYD: ". $referralData[4][0] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by Dr. Bhargava: ". $referralData[5][0] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by Mercy Employee: ". $referralData[6][0] . "</h2></p>";
		//echo "<p><h2 style='text-align:left'>Total by 'Others': ". $referralData[7][0] . "</h2></p>";


		echo "</td></tr></table>";
		?>



	</table>

</div>
		<?php

		//counts all the array values in my oddly shaped array, to be used for percentages
		function arrayCounter($passedReferralData){
			$sum=0;
			$count=0;
			foreach ($passedReferralData as $value){
$sum+=$value[$count][1]; // count all the totals for each type of referral
$count++;


}
return $sum;

}


?>


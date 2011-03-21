<style type="text/css">
div.ex
{
height:700px;
width:1000px;
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
<p><b>Demographics Report</b></p>
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
//echo "this is the element for the demographic report";
//data arrays to hold querry results
$locationCityArray;
$locationStateArray;
$genderArray;
$yearBornArray;
$educationArray;
$incomeArray;
$familyArray;
$maritalArray;
// name variables for headers and table spitter function
$locationCityName;
$locationStateName;
$genderName;
$yearBornName;
$educationName;
$incomeName;
$familyName;
$maritalName;

//testing
//echo " </br>";
//echo " </br>";
/**
debug($locationCityArray);
echo " </br>";
debug($locationStateArray);
echo " </br>";
debug($genderArray);
echo " </br>";
debug($yearBornArray);
echo " </br>";
debug($educationArray);
echo " </br>";
debug($incomeArray);
echo " </br>";
debug($familyArray);
echo " </br>";
debug($maritalArray);
//end testing
//echo "<center>";
// visual output
//echo "<table border=4 cellspacing=5>";
//echo "<tr><td align:center>".spitTable($locationCityArray, $locationCityName)."</td><td>".spitTable($locationStateArray,$locationStateName)."</td></tr>";
//echo "<tr><td>".spitTable($genderArray,$genderName)."</td><td>".spitTable($yearBornArray,$yearBornName)."</td></tr>";
//echo "<tr><td>".spitTable($educationArray,$educationName)."</td><td>".spitTable($incomeArray,$incomeName)."</td></tr>";
//echo "<tr><td>".spitTable($familyArray,$familyName)."</td><td>".spitTable($maritalArray,$maritalName)."</td></tr>";
//echo "</table></center>";
**/
echo "<table border=4 cellspacing=5 style='background-color:#F5FFFA'><tr><td>";
echo spitTable4($locationCityArray, $locationCityName);
echo "</td><td>";
echo spitTable4($incomeArray,$incomeName);
echo "</td></tr><tr><td>";
echo spitTable($locationStateArray,$locationStateName);
echo "</td><td>";
echo spitTable4($yearBornArray,$yearBornName);
echo "</td></tr><tr><td>";
echo spitTable($educationArray,$educationName);
echo "</td><td>";
echo spitTable4($genderArray,$genderName);
echo "</td></tr><tr><td>";
echo spitTable($familyArray,$familyName);
echo "</td><td>";
echo spitTable4($maritalArray,$maritalName);
echo "</center></td></tr></table>";






echo "</table>";


// functions -- put these in an external file later and just static call them



function spitTable4($columnArray, $columnName){
echo "<table border=4 cellspacing=5 style='margin-left:auto;margin-right:auto;background-color:white;'>";
		// table level variables
		
		
		
		$totalRecordCount=arrayCounter2($columnArray);// perform a calculation to identify the sum of all records, to be used for percentages of referrals
		$count=0;
		echo "  Total Records (N) = " . $totalRecordCount;
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
function arrayCounter2($Data){
			$sum=0;
			$count=0;
			foreach ($Data as $value){
			$sum+=$Data[$count][1]; // count all the totals for each type of referral
				$count++;


			}
				return $sum;

		}


?>

<h1>Overview of User Pool</h1>
<style type="text/css">
div.ex2
{
height:210px;
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

<div class="ex2">
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
// passed variables from controller

//totals
$totalUsers;// total users in DB
$totalDistinctUsers;
$totalUCDParticipants; 
$totalUCDDistinctParticipants;
$ucdParticipationPercent=percentMe($totalUsers,$totalUCDDistinctParticipants); //PERCENT OF TOTAL users that are UCD participants
// end totals

//tabled items
$futureFocusGroupsName;
$futureFocusGroupsArray;
$futureInterviewsName;
$futureInterviewsArray;
$futureStudiesName;
$futureStudiesArray;

$statusUpdatesName;
$statusUpdatesArray;
$notifyLaunchName;
$notifyLaunchArray;

$surveysName;
$surveysArray;

//inclusion info
$smartPhoneName;
$smartPhoneArray;
$computerInternetName;
$computerInternetArray;
$phoneTypeName;
$phoneTypeArray;

// end tabled


// special
$newRecordCount=0;  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! build method to calculate this
// end special




//debug($futureFocusGroupsArray);  //testing
//debug($futureInterviewsArray); //testing
//debug($futureStudiesArray); //testing



//totals id's table
echo "<table border=1 cellspacing=5 style='background-color:#F5FFFA'><tr><td>";
echo "Total Users: ".$totalUsers. "  Total Unique:  ".$totalDistinctUsers;
echo "</td><td>Total UCDParticipants:  ".$totalUCDParticipants."  Total Unique Participants:  ".$totalUCDDistinctParticipants;
echo"</td></tr><tr><td>Participation %:  ".$ucdParticipationPercent; 
echo "</td><td>  New Records(Last 30 Days):  ".$newRecordCount;
echo"</td></tr></table>";




//construct horizontal table

echo "<table border=4 cellspacing=5 style='background-color:#F5FFFA'><tr><td>";
echo spitTable($futureFocusGroupsArray, $futureFocusGroupsName);
echo "</td><td>";
echo spitTable($futureInterviewsArray, $futureInterviewsName);
echo "</td><td>";
echo spitTable($futureStudiesArray, $futureStudiesName);
echo "</td></tr><tr><td>";
echo spitTable($statusUpdatesArray, $statusUpdatesName);
echo "</td><td>";
echo spitTable($notifyLaunchArray, $notifyLaunchName);
echo "</td><<td>";
echo spitTable($surveysArray, $surveysName);
echo "</td>/tr><tr><td>";
echo spitTable($smartPhoneArray, $smartPhoneName);
echo "</td><td>";
echo spitTable($computerInternetArray, $computerInternetName);
echo "</td><td>";
echo spitTable($phoneTypeArray,$phoneTypeName);

//echo "</td><td>";
echo "</center></td></tr></table>";



//echo "</center></td></tr></table>";





// MARKED FOR CODE REDUCTION
function spitTable($columnArray, $columnName){
echo "<table border=4 cellspacing=5 style='margin-left:auto;margin-right:auto;background-color:white;'>";
		// table level variables
		
		
		
		$totalRecordCount=arrayCounter($columnArray);// perform a calculation to identify the sum of all records, to be used for percentages of referrals
		$count=0;
		//echo "  Total Records (N) = " . $totalRecordCount; //testing
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
function arrayCounter($Data){
			$sum=0;
			$count=0;
			foreach ($Data as $value){
			$sum+=$Data[$count][1]; // count all the totals for each type of referral
				$count++;


			}
				return $sum;

		}
		
		function percentMe($pool,$amount){
		
		return ($amount/$pool)*100;
		}

?>
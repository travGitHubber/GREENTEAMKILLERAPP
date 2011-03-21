
<style type="text/css">
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

<p><b>UCD Report</b></p>
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
text-align:center;
}
#reportdata th 
{
font-size:1.1em;
text-align:center;
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
$ucdData;
$totalParticipants;
$uniqueParticipants;
$participationIDName;
$participationIDArray;


$switch=true;
//debug($ucdData);
echo "<table><tr><td>";
echo "<table>";
echo $html->tableHeaders(array_keys($ucdData[0]['Surveyexport']));
foreach ($ucdData as $ucd){
//debug($ucd);
if($ucd['Surveyexport']['participantdate2']=='0000-00-00'){
	$ucd['Surveyexport']['participantdate2']='';
}
if($switch){
echo "<style type='text/css'>td {background-color:orange;}</style>";
$switch=false;
}else{
echo "<style type='text/css'>td {background-color:white;}</style>";
$switch=true;
}

echo $html->tableCells($ucd['Surveyexport']);
}
echo "</table></td><td>";

// next table

echo spitTable($participationIDArray,$participationIDName);

echo "</td></tr></table>";




?>












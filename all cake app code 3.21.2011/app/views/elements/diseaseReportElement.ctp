<?php //@author Travis Bloomquist ?>
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
<p><h2><b>Disease Report</b></h2></p>
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
$whoTreatsName1;
$whoTreatsName2;
$timeWithDiabetesName;
$typeOfDiabetesName;
$treatmentName1;
$treatmentName2;
$treatmentName3;


$whoTreatsArray1;
$whoTreatsArray2;
$timetWithDiabetesArray;
$typeOfDiabetesArray;
$treatmentArray1;
$treatmentArray2;
$treatmentArray3;

echo "<table border=4 cellspacing=5 style='background-color:#F5FFFA'><tr><td>";
echo spitTable($whoTreatsArray1, $whoTreatsName1);
echo spitTable($whoTreatsArray2, $whoTreatsName2);
echo "</td><td>";
echo spitTable($timeWithDiabetesArray,$timeWithDiabetesName);
echo "</td></tr><tr><td>";
echo spitTable($typeOfDiabetesArray,$typeOfDiabetesName);
echo "</td><td>";
echo spitTable($treatmentArray1,$treatmentName1);
echo spitTable($treatmentArray2,$treatmentName2);
echo spitTable($treatmentArray3,$treatmentName3);
echo "</center></td></tr></table>";


// MARKED FOR CODE REDUCTION

?>
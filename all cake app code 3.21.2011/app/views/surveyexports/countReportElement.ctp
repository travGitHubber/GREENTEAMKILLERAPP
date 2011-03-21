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

<p><b>Report of all data in the database currently.</b></p>
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
<table id="reportdata">



<p>THIS IS AN ELEMENT LETS PUT TABLES IN HERE</p>
<?php
// area to display reports

$surveyexports;
$Surveyexport;

//field array, this is an array of counts for specific fields by report
$totalUsers[3]; // this is an array of DISTINCT ID's, DISTINCT focus ID, Record count(calculated)


print_r($totalUsers[0]);
//print_r($surveyexports);
//echo "<br/>size of variable   ".sizeof($surveyexports);
//if(sizeof($surveyexports!=0))
//{

//echo $html->tableHeaders(array_keys($surveyexports[0]['Surveyexport']));

//foreach ($surveyexports as $Surveyexport)
//{
	//echo $html->tableCells($Surveyexport['Surveyexport']);
//}

//}else{
	//echo "<h1>No records located</h1>";
//}

?>



</table>

</div>



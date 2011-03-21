<?php echo $this->Session->flash(); ?>


<style type="text/css">
div.ex2
{
height:210px;
width:90%;
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
/**
*This is the "view" used to view specific records after a search, related files are surveyexports_controller, which calls this function/page
*
**/
$idPassed; // idpassed is the key value passed into the view, used to determine which record to view
$passedRecord; // passedRecord holds all information in an array of the record


//debug($passedRecord); // used for testing
?>

<div class="noformat">
<center><h2> View Record </h2></center>

<center><?php echo $this->Session->flash(); ?></center>

</div>
<?php 
echo"<center><div class='ex2'>";
$passedRecord;



// area to display reports


if(is_array($passedRecord)){
echo "<table id='reportdata' border=1 cellpadding='3' >";



echo "<p>Record to View:</p>";
echo $html->tableHeaders(array_keys($passedRecord['Surveyexport']));
foreach ($passedRecord as $Surveyexport)
{
	echo $html->tableCells($Surveyexport);//['Surveyexport']
}



echo "</table></br>";
echo "</div></center>";
// area to display links
echo "<div class='noformat'><center><h1><a href='/cakephp/surveyexports/edit/".$idPassed."'>Edit This Record</a></h1></center></div>"; 

}else{
echo "<center><h2>Sorry, the computer goblins couldn't find that one. </h2></center>";
echo "<center><h2>Please select a valid record. </h2></center>";
//show computer goblin on error
echo "</div><div class='noformat' ><img src='http://travisb.info/cakephp/app/webroot/goblin.jpg' alt='putergoblin' /><div>";
}
echo "<center><h1><a href='/cakephp/surveyexports/recordfinderhome'>  Select a new record</a></h1></center>";


?>
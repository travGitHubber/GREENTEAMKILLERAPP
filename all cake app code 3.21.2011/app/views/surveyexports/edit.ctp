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


<div class="noformat">
<h2> Edit Record </h2>

<center><?php echo $this->Session->flash(); ?></center>

</div>
<?php 
echo"<center><div class='ex2'>";
$passedRecord;

echo "<table id='reportdata' border=1 cellpadding='3' >";



echo "<p>Record to Edit:</p>";

// area to display reports



echo $html->tableHeaders(array_keys($passedRecord['Surveyexport']));
foreach ($passedRecord as $Surveyexport)
{
	echo $html->tableCells($Surveyexport);//['Surveyexport']
}



echo "</table></br>";
echo "</div></center>";
echo" <div.r>";
echo $form->create('Surveyexport', array('action'=>'edit'));
//cheryl accessible
echo $form->input('id', array('type'=>'hidden'));

echo $form->input('participationID');
echo $form->input('participantdate1');
if($admin){
echo $form->input('Referal');
echo $form->input('City');
}
//echo $form->end('Update Record');
echo $form->end(__('Update Record', true));
// need to add some preconditions here, also need to offer a way to revert(if possible)
echo "</div>";
echo "<center><h1><a href='/cakephp/surveyexports/recordfinderhome'>  Select a new record</a></h1></center>";
?>
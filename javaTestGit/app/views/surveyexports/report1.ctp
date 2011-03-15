<p>Canned Report 1</p>

<table>
<tr>
<th>ID</th>
<th>Date Updated</th>
</tr>
<?php 




echo $html->tableHeaders(array_keys($surveyexports[0]['Surveyexport']));

foreach ($surveyexports as $Surveyexport)
{
	echo $html->tableCells($Surveyexport['Surveyexport']);
}


?>

</table>
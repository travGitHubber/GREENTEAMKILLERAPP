<p>OMG THIS PAGE IS SO SEXAY!!</p>

<table>
<tr>
<th>ID</th>
<th>Date Updated</th>
</tr>
<?php 

$I = 0;

foreach($surveyexports as $Surveyexport){ 
	$rowCount=sizeof($Surveyexport);
	$colCount=45;
	
	
	
	for($I;$I<$colCount;$I++){
		
		echo "<tr><td>";

 echo $Surveyexport['Surveyexport']['$I']; // winner

echo "</td></tr>";
		
	}
	
}
?>

</table>
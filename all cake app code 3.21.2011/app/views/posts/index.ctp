<p>OMG THIS PAGE IS SO SEXAY!!</p>

<table>
<tr>
<th>Title</th>
<th>Body</th>
</tr>
<?php 

foreach($posts as $poster){ 
echo "<tr><td>";
echo $poster['Post']['titel']; 
echo "</td><td>";
echo $poster['Post']['body']; 
echo"</td></tr>";


}
?>

</table>
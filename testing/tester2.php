<?php
$databasehost = "173.201.88.100";
$databasename = "mis1105402314808";
$databasetable = "testing2";
$databaseusername ="mis1105402314808";
$databasepassword = "G1980berlin";
$fieldseparator = ",";
$lineseparator = "\n";
$csvfile = "CleanedRAWCSV.csv";
$linearray = array();
$conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($databasename);
$result = mysql_query('select * from testing3');
if (!$result) {
    die('Query failed: ' . mysql_error());
}
/* get column metadata */
$i = 0;
global $linearray;
while ($i < mysql_num_fields($result)) {
	global $linearray;
	$meta = mysql_fetch_field($result, $i);
    if (!$meta) {
        echo "No information available<br />\n";
    }
    array_push($linearray,$meta->name);
    echo "<pre>
name:         $meta->name
table:        $meta->table
type:         $meta->type
</pre>";
    $i++;
}
#
foreach ($linearray as $value) {
#
echo $value." "; }
mysql_free_result($result);
?>

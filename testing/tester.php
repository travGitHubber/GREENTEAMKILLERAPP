<?php
// Connecting, selecting database
$link = mysql_connect('173.201.88.100', 'mis1105402314808', 'G1980berlin')
    or die('Could not connect: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('mis1105402314808') or die('Could not select database');

$result = mysql_query("SELECT * FROM testing1", $link);
$num_rows = mysql_num_rows($result);
$num_fields = mysql_num_fields($result);


// for ($i = 1; $i <= $num_fields; $i++) {
    // echo $i;  /* the printed value would be
                   // $i before the increment
                   // (post-increment) */
// }
echo "$num_rows Rows\n";
echo "$num_fields Fields\n";

?>

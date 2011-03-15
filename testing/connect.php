<?php

session_start();

$db = mysql_connect("173.201.88.100", "mis1105402314808", "G1980berlin") or die("Could not connect.");

if(!$db) 

	die("no db");

if(!mysql_select_db("mis1105402314808",$db))

 	die("No database selected.");

?>


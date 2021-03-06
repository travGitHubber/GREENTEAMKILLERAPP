<?php

/********************************/
/* Code at http://legend.ws/blog/tips-tricks/csv-php-mysql-import/
/* Edit the entries below to reflect the appropriate values
/********************************/
$databasehost = "173.201.88.100";
$databasename = "mis1105402314808";
$databasetable = "testing2";
$databaseusername ="mis1105402314808";
$databasepassword = "G1980berlin";
$fieldseparator = ",";
$lineseparator = "\n";
$csvfile = "CleanedRAWCSV.csv";
/********************************/
/* Would you like to add an ampty field at the beginning of these records?
/* This is useful if you have a table with the first field being an auto_increment integer
/* and the csv file does not have such as empty field before the records.
/* Set 1 for yes and 0 for no. ATTENTION: don't set to 1 if you are not sure.
/* This can dump data in the wrong fields if this extra field does not exist in the table
/********************************/
$addauto = 0;
/********************************/
/* Would you like to save the mysql queries in a file? If yes set $save to 1.
/* Permission on the file should be set to 777. Either upload a sample file through ftp and
/* change the permissions, or execute at the prompt: touch output.sql && chmod 777 output.sql
/********************************/
$save = 1;
$outputfile = "output.sql";
/********************************/


if(!file_exists($csvfile)) { echo "File not found. Make sure you specified the correct path.\n"; exit;}
$file = fopen($csvfile,"r");

if(!$file) { echo "Error opening data file.\n";	exit; }
$size = filesize($csvfile);

if(!$size) { echo "File is empty.\n"; exit;}
$csvcontent = fread($file,$size);
fclose($file);

$con = @mysql_connect($databasehost,$databaseusername,$databasepassword) or die(mysql_error());
@mysql_select_db($databasename) or die(mysql_error());

$lines = 0;
$queries = "";
$linearray = array();

foreach(split($lineseparator,$csvcontent) as $line) {

	$lines++;

	$line = trim($line," \t");
	
	$line = str_replace("\r","",$line);
	$underTenK="Under $10,000";
		$tenK="$10,000- $29,000";
		$thirtyK="$30,000- $59,000";
		$sixtyK="$60,000- $99,999";
		$hundredK="$100,000 and above";
		//replace values
		$fixUnderTenK="Under $10000";
		$fixTenK="$10000- $29000";
		$fixThirtyK="$30000- $59000";
		$fixSixtyK="$60000- $99000";
		$fixHundredK="$100000 and above";
		//search and DESTROY
		$line=str_ireplace($underTenK, $fixUnderTenK, $line);
		$line=str_ireplace($tenK, $fixTenK, $line);
		$line=str_ireplace($thirtyK, $fixThirtyK, $line);
		$line=str_ireplace($sixtyK, $fixSixtyK, $line);
		$line=str_ireplace($hundredK, $fixHundredK, $line);
	
	/************************************
	This line escapes the special character. remove it if entries are already escaped in the csv file
	************************************/
	$line = str_replace("'","\'",$line);
	/*************************************/
//	echo $line;
	$linearray = explode($fieldseparator,$line);
	array_push ($linearray,3,4,5,6);
	echo $linearray[4] . '<br>';
	$linemysql = implode("','",$linearray);
	if (strlen($linemysql) > 1)
	{
	if($addauto){
		$query = "insert into $databasetable values('','$linemysql');";
		}
	else
		$query = "insert into $databasetable values('$linemysql');";
	
	$queries .= $query . "\n";

	@mysql_query($query);
	}
}

@mysql_close($con);

$file2 = fopen($outputfile,"w");
fwrite($file2,$queries);
		fclose($file2);
echo "Found a total of $lines records in this csv file.\n";


?>

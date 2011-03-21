<?php
//Global values in this file.
/**
 * Current database host to be used in all the mysql connection.
 * $conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
 */
$databasehost = "173.201.88.100";		
/**
 * Current database name to be used in all the mysql connection.
 * $conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
 */
$databasename = "mis1105402314808";
/**
 * The database username to be used in all the mysql connection.
 * $conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
 */
$databaseusername ="mis1105402314808";
/**
 * The database username password to be used in all the mysql connection.
 * $conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
 */
$databasepassword = "G1980berlin";
/**
 * Character that is used by the csv file to represent end of a field.
 * Used when parsing each field from each line of the csv file.
 */
$fieldseparator = ",";
/**
 * Character that is used by the csv file to represent end of line.
 * Used when parsing each line out of the csv file.
 */
$lineseparator = "\n";				
/**
 * Current CSV file that is being reviewed.
 * This is the file that will be parsed with this program.
 */
$csvfile = "CleanedRAWCSV.csv";	
/**
 * This is where the found fields from each CSV line are stored.
 * Used in multiple functions of this program.
 */
$fieldsArray = array();
/**
 * This is where the found tables for the given mysql connection are stored.
 */
$tablesArray = array();
/**
 * This is where the found headers from the CSV are stored.
 * This is used by multiple parts of this program.
 */
$headersArray = array();

//TODO
$inserterArray = array(array());	// This is the inserterArray used for collecting database inserts.
/**
 * This is the database Array for holding the database structure.
 * $databaseArray[$i] Is an Array of all the tables currently in the database. 
 * Where $i is the number of the table being viewed.
 * $databaseArray[$i][0] Is the name of the table being stored.
 * $databaseArray[$i][$number} $number is the current table's field name starting at 1 
 * and going till all the fields are represented in the table. 
 */
$databaseArray = array(array());
/**
 * Counter used for the number of tables in the $databasename.
 */
$howManytables = 0;
/**
 * Counter used for the number of headers found in the current CSV file.
 */
$foundHeaders = 0;
/**
 * Decides if tested echos responses will be shown.
 * If $showEchos = false; All tested echos will not be shown.
 * If $showEchos = true; All tested echos will be shown.
 */
$showEchos = false;

/**
 * This is some code that I am playing with at the moment.
 */
//-------------------------------------------------------------------------------------------------
	
// echo $csvcontent;
/* $testingArray = array(array());
$testingArray2 = array('joel', 'bob', 'greg');
$testingArray3 = array( joel1, bob1, greg1);
$testingArray4 = array('joel2', 'bob2', 'greg2');

$testingArray[0] = $testingArray2;
$testingArray[1] = $testingArray3;
$testingArray[2] = $testingArray4;
$linemysql = implode(",",$testingArray[1]);
*/
getHeaders($csvfile);
getDatabaseTables($databasehost, $databaseusername, $databasepassword, $databasename);
setupDatabasearray($databasehost, $databaseusername, $databasepassword, $databasename);
if ($showEchos == True) echo '<br><b>' . count($tablesArray). " Tables in this Database </b><br><br>";
if ($showEchos == false) show2dArray();
thereplacer($databasehost, $databaseusername, $databasepassword);
startSearching($databaseArray,$headersArray);
insertME($csvfile);
/**
 * Gets the headers from the csv file. Used later for data matching.
 * This pushes information into the $headersArray.
 * @param $csvfile file This is the csv file we are using.
 */
function getHeaders($csvfile)
{
	global $headersArray, $showEchos, $lineseparator, $fieldseparator;
	if(!file_exists($csvfile)) { echo "File not found. Make sure you specified the correct path.\n";	exit;}
	$file = fopen($csvfile,"r");
	if(!$file) { echo "Error opening data file.\n"; exit; }
	$size = filesize($csvfile);
	if(!$size) {echo "File is empty.\n"; exit;}
	$csvcontent = fread($file,$size);
	fclose($file);
	$lines = 0;
	$linearray = array();

	foreach(split($lineseparator,$csvcontent) as $line) 
	{
		$lines++;
		if ($lines == 1)
		{
		$line = trim($line," \t");
		$line = str_replace("\r","",$line);
		$line = str_replace("'","\'",$line);
		$linearray = explode($fieldseparator,$line);
		for($i =0; $i < count($linearray); $i++){ array_push($headersArray,$linearray[$i]);
		if ($showEchos == True) echo 'Header'.$i. ' is ' .$linearray[$i]. '<br>'; }
		} 
	}
}
/**
 * This is used to show all tables and their field information from the
 * Database that is stored in a 2D Array.
 */
function show2dArray()
{
	global $databaseArray, $howManytables;
	for($row = 0; $row < $howManytables; $row++)
	{
		echo 'Table is ' . $databaseArray[$row][0] . '<br>';
		echo 'Columns in this table are <br>';
		for($column = 1; $column < count($databaseArray[$row]); $column++)
		{
			if($column == 1) echo $databaseArray[$row][$column]; 
			else echo ', '. $databaseArray[$row][$column]; 
			
		}
	echo '<br><br>';
	}	
}
/**
 * Shows all the information from the database.
 * @param $databasehost	String		Databe host address
 * @param $databaseusername	String	Database user name
 * @param $databasepassword	String	Database user password
 * @param $databasename	String		Database name
 * @param $databasetable String		Table name in Database
 */
function setupDatabasearray($databasehost, $databaseusername, $databasepassword, $databasename)
{
	global $tablesArray, $fieldsArray, $databaseArray;
	for ($j = 0; $j < count($tablesArray); $j++)
	{
	$table = $tablesArray[$j];
	getColumnNameInformation($databasehost, $databaseusername, $databasepassword, $databasename, $table);
		for($i = 1; $i <= count($fieldsArray); $i++ )
		{
			$databaseArray[$j][0] = $table;
			$databaseArray[$j][$i] = $fieldsArray[$i-1];
		}
	}
}
/**
 * Collects all the Table names of a database and puts them in the Tables Array
 * @param $databasehost	String		Databe host address
 * @param $databaseusername	String	Database user name
 * @param $databasepassword	String	Database user password
 * @param $databasename	String		Database name
 * @param $databasetable String		Table name in Database
 */
function getDatabaseTables($databasehost, $databaseusername, $databasepassword, $databasename)
{
global $tablesArray, $howManytables;
$conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
$res = mysql_query("SHOW TABLES FROM $databasename");
while($row = mysql_fetch_array($res, MYSQL_NUM))
	{ 
	if($row[0] != 'columns'){
	array_push($tablesArray,$row[0]);
	$howManytables = count($tablesArray);
	}
	}
}
/**
 * Collects all the column names of a Table and puts them in the Fields Array
 * @param $databasehost	String		Database host address
 * @param $databaseusername	String	Database user name
 * @param $databasepassword	String	Database user password
 * @param $databasename	String		Database name
 * @param $databasetable String		Table name in Database
 */
function getColumnNameInformation($databasehost, $databaseusername, $databasepassword,$databasename,$databasetable)
{
global $fieldsArray;
$fieldsArray = array();

$conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
if (!$conn) die('Could not connect: ' . mysql_error());
mysql_select_db($databasename);
$result = mysql_query('select * from ' . $databasetable);
if (!$result) die('Query failed: ' . mysql_error());

for($i = 0; $i < mysql_num_fields($result); $i++) 
	{
	global $fieldsArray;
	$meta = mysql_fetch_field($result, $i);
    if (!$meta) echo "No information available<br />\n";
    array_push($fieldsArray,$meta->name); 
	}
}
/**
 * Searches the 2d Array of Database information for the given header.
 * @param $databaseArray 2d Array  Holds the informatino of the Database
 * @param $searchFor String This is the header that you are searching for
 */
function findColumn($databaseArray, $searchFor)
{
global $howManytables, $foundHeaders, $showEchos;
	for ($j = 0; $j < $howManytables; $j++)
		{
			for($i = 1; $i <= count($databaseArray[$j]); $i++ )
			{
			if (strcmp($searchFor, $databaseArray[$j][$i]) == 0)
			{ 
			if ($showEchos == True){ echo '<br>'. $searchFor .' was found in table ' 
			. $databaseArray[$j][0] . ' column number ' . $i; }
			$foundHeaders++;
			}
			}
		}
}
/**
 * Starts the searching commands for the database Array
 * @param $databaseArray 2D Array  This is the array to use.
 * @param $headersArray  Array	   This is the header array to use.
 */
function startSearching($databaseArray,$headersArray)
{
	global $foundHeaders, $csvfile;
	for($joel = 0; $joel < count($headersArray) ; $joel++)
	{
		$searchME = $headersArray[$joel];
		findColumn($databaseArray, $searchME);
	}
	echo ' <br> We have found '. $foundHeaders. ' headers of the '. count($headersArray). ' headers
	found in the file ' . $csvfile .'<br>';
	echo 'This is ' .$foundHeaders / count($headersArray) * 100 . ' percent of all the 
	headers in the ' .$csvfile . ' file where found in the database.';
}
/**
 * Replaces the $headersArray values from the csv file with the Mysql database column counterparts.
 * @param $databasehost	String		Database host address
 * @param $databaseusername	String	Database user name
 * @param $databasepassword	String	Database user password
 */
function thereplacer($databasehost, $databaseusername, $databasepassword)
{
	global $headersArray, $databasename, $showEchos;
	$conn = mysql_connect($databasehost, $databaseusername, $databasepassword);
	if (!$conn) die('Could not connect: ' . mysql_error());
	mysql_select_db($databasename);
	for($i = 0; $i < count($headersArray) ; $i++)
	{
		$result = mysql_query("SELECT csvHeader,tableField FROM columns WHERE csvHeader = '$headersArray[$i]'");
		if (!$result) { echo 'Could not run query: ' . mysql_error(); exit; }
		$row = mysql_fetch_row($result);
		if ($showEchos == True) echo "<br><b> CSV Header $i is $headersArray[$i] </b>" ;
		$headersArray[$i] = $row[1];
		if ($showEchos == True) echo "<br><i> Table Header $i is $headersArray[$i] </i>" ;
	}
	if ($showEchos == True) echo '<br>';
}
/**
 * Going to be used to create the insert data from the CSV File
 */
function insertME($csvfile)
{	
global $headersArray,$howManytables, $lineseparator, $databasehost, $databaseusername,
$databasepassword, $databasename, $fieldseparator, $databaseArray, $inserterArray; 
if(!file_exists($csvfile)) { echo "File not found. Make sure you specified the correct path.\n"; exit;}
$file = fopen($csvfile,"r");

if(!$file) { echo "Error opening data file.\n";	exit; }
$size = filesize($csvfile);

if(!$size) { echo "File is empty.\n"; exit;}
$csvcontent = fread($file,$size);
fclose($file);

$con = @mysql_connect($databasehost,$databaseusername,$databasepassword) or die(mysql_error());
@mysql_select_db($databasename) or die(mysql_error());
echo '<BR>' .$headersArray[0].' what the hell headers';	
echo '<br>' .$databaseArray[5][2].' what the hell database <br>';	
$lines = 0;
$queries = "";
$linearray = array();
$insertArray = $inserterArray;
foreach(split($lineseparator,$csvcontent) as $line) 
{
	$lines++;

	$line = trim($line," \t");
	$line = str_replace("\r","",$line);
	/************************************
	This line escapes the special character. remove it if entries are already escaped in the csv file
	************************************/
	$line = str_replace("'","\'",$line);
	/*************************************/
	$linearray = explode($fieldseparator,$line);
	
	for($row = 0; $row < $howManytables && $lines == 1; $row++)
	{
		if ($databaseArray[$row][0] == 'columns');
		for($column = 2; $column < count($databaseArray[$row]); $column++)
		{
			for($test = 0; $test < count($headersArray); $test++)
			{			
				if(strcmp($headersArray[$test], $databaseArray[$row][$column]) == 0 ) {
				$inserterArray[$row][$column-2] = $linearray[$test]; 
				echo $inserterArray[$row][$column-2] . "<br>";
				}
			}
		}
	} 
	for($row = 0; $row < $howManytables && $lines > 1; $row++)
	{
		for($column = 2; $column < count($databaseArray[$row]); $column++)
		{
			for($test = 0; $test < count($headersArray); $test++)
			{			
				if(strcmp($headersArray[$test], $databaseArray[$row][$column]) == 0 ) {
				$inserterArray[$row][$column-2] = $linearray[$test];
				if (strcmp($inserterArray[$row][$column-2], "") == 0 ) {
					$inserterArray[$row][$column-2] = NULL;
					
				} 
				echo $inserterArray[$row][$column-2] . " joel <br>";
				}
			}
		}
	}
	for($row = 0; $row < $howManytables; $row++)
	{
		if ($databaseArray[$row][0] == 'columns') ;
		echo "row equal $row";
		$linemysql = implode("','",$inserterArray[$row]);
		if (strlen($linemysql) > 1 && $lines >1) 
		{
		$query = "insert into " .$databaseArray[$row][0] ." values(NULL,'$linemysql');";
		$queries .= $query . "\n";
		@mysql_query($query);
		}
	}
	echo '<br>';
}
	$outputfile = "output.sql";

		@mysql_close($con);
		$file2 = fopen($outputfile,"w");
		fwrite($file2,$queries);
		fclose($file2);
	echo "Found a total of $lines records in this csv file.\n";
}

?>
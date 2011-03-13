<?php
$databasehost = "173.201.88.100";
$databasename = "mis1105402314808";
$databaseusername ="mis1105402314808";
$databasepassword = "G1980berlin";
$fieldseparator = ",";
$lineseparator = "\n";
$csvfile = "CleanedRAWCSV.csv";
$fieldsArray = array();
$tablesArray = array();
$headersArray = array();
$databaseArray = array(array());
$howManytables = 0; 

// echo $csvcontent;
getHeaders($csvfile);
getDatabaseTables($databasehost, $databaseusername, $databasepassword, $databasename);
setupDatabasearray($databasehost, $databaseusername, $databasepassword, $databasename);
echo count($tablesArray). " Tables in this Database <br><br>";
// show2dArray();
startSearching($databaseArray,$headersArray);
/**
 * Gets the headers from the csv file. Used later for data matching.
 * This pushes information into the $headersArray.
 * @param $csvfile file This is the csv file we are using.
 */
function getHeaders($csvfile)
{
	global $headersArray, $lineseparator, $fieldseparator;
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
		for($i =0; $i < count($linearray); $i++){ array_push($headersArray,$linearray[$i]); echo 'Header'.$i. ' is                 ' .$linearray[$i]. '<br>'; }
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
//	echo '<br>' .$table . ' table <br>';
//	echo count($fieldsArray). " fieldsArray <br>";
		for($i = 1; $i <= count($fieldsArray); $i++ )
		{
			$databaseArray[$j][0] = $table;
			$databaseArray[$j][$i] = $fieldsArray[$i-1];
		}
//	foreach ($fieldsArray as $value) echo $value." ";
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
while($row = mysql_fetch_array($res, MYSQL_NUM)) array_push($tablesArray,$row[0]);
$howManytables = count($tablesArray);
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
global $howManytables;
	for ($j = 0; $j < $howManytables; $j++)
		{
			for($i = 1; $i <= count($databaseArray[$j]); $i++ )
			{
			if (strcmp($searchFor, $databaseArray[$j][$i]) == 0) echo $searchFor .' was found in table '
			 . $databaseArray[$j][0] . ' column number ' . $i. '<br>';
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
	for($joel = 0; $joel < count($headersArray) ; $joel++)
	{
		$searchME = $headersArray[$joel];
		findColumn($databaseArray, $searchME);
	}
}
?>
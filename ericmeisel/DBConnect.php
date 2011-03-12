<?php

//Database Credentials

$host = '97.74.31.25';
$database = 'ericmeisel';
$username = 'ericmeisel';
$password = 'eric*Meisel1';

try {

  $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);

}

catch(PDOException $e) {

    echo $e->getMessage();

}

echo "it works";


?>
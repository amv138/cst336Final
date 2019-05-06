<?php

function getDatabaseConnection($dbName) {

$host = "us-cdbr-iron-east-03.cleardb.net";
$username = "b308c5d9f9e8cd";
$password = "4d2b41a6";
$dbName = "heroku_26a8c0d69fc01bf";
//checks whether the URL contains "herokuapp" (using Heroku)
//if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$host = $url["host"];
//$dbName = substr($url["path"], 1);
//$username = $url["user"];
//$password = $url["pass"];
//}

$dbConn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

return $dbConn;


}


?>
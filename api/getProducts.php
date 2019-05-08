<?php

//gets all products


//Establishing db
include '../inc/dbConnection.php';
$dbConn = getDatabaseConnection("carmart");

$sql = "SELECT * FROM products ORDER BY price";
$stmt = $dbConn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //displays array content

echo json_encode($records);

//echo $records[0]['name'];
?>
<?php

//gets all products


//Establishing db
include '../inc/dbConnection.php';
$dbConn = getDatabaseConnection("carmart");

$product_id = $_GET["prod_id"];

$sql = "SELECT * FROM products WHERE `product_id` = $product_id";
$stmt = $dbConn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //displays array content

echo json_encode($record);

//echo $records[0]['name'];
?>
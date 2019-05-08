<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    exit;
    
}
//Establishing db
include '../inc/dbConnection.php';
$dbConn = getDatabaseConnection("carmart");

$sql = "SELECT * FROM products ORDER BY price";
$stmt = $dbConn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //displays array content

$total = 0;
$count = 0;
foreach ($records as &$value) {
    $total += $value["price"];
    $count++;
}

$total = $total/$count;

echo json_encode($total);

//echo $records[0]['name'];
?>
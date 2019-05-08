<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    exit;
    
}

    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("carmart");

    //gets user count
    $sql ="SELECT COUNT(*) FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($records);
    
?>
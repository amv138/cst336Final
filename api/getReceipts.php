<?php

    //gets all products


    //Establishing db
    include '../inc/dbConnection.php';
    $dbConn = getDatabaseConnection("carmart");
    
    $sql = "SELECT * FROM receipts";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($arr);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
    
    echo json_encode($records);
?>
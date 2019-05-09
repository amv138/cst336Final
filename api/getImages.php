<?php

    //gets all products


    //Establishing db
    include '../inc/dbConnection.php';
    $dbConn = getDatabaseConnection("carmart");
    
    $sql = "SELECT * FROM gallery";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
    
    echo json_encode($records);
?>
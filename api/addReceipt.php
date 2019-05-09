<?php

    //gets all products


    //Establishing db
    include '../inc/dbConnection.php';
    $dbConn = getDatabaseConnection("carmart");
    
    $arr = array();
    
    $arr[":prod_id"] = $_GET["prod_id"];
    $arr[":prod_name"] = $_GET["prod_name"];
    
    // $product_id = $_GET["prod_id"];
    // $product_name = $_GET["prod_name"];
    // // echo($product_name);
    
    $sql = "INSERT INTO receipts (`product_id`, `product_name`) VALUES (:prod_id, :prod_name)";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($arr);
?>
  
    <!--$sql = "INSERT INTO `Receipts` (`receipt_id`, `date`, `user_id`, `user_email`, `product_id`, `product_name`) VALUES (NULL, CURRENT_TIMESTAMP, '', '', :prod_id, :prod_name)";-->
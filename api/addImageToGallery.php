<?php

    //gets all products


    //Establishing db
    include '../inc/dbConnection.php';
    $dbConn = getDatabaseConnection("final336");
    
    $arr = array();
    
    $arr[":id"] = 5;
    $arr[":url"] = "<https://ibb.co/RSgLFfj";
    
    // $product_id = $_GET["prod_id"];
    // $product_name = $_GET["prod_name"];
    // // echo($product_name);
    
    $sql = "REMOVE * FROM gallery";
    //$sql = "INSERT INTO gallery (`image_id`, `url`) VALUES (:id, :url)";
    $stmt = $dbConn -> prepare($sql);  //$connection MUST be previously initialized
    $stmt->execute();
?>
  
    <!--$sql = "INSERT INTO `Receipts` (`receipt_id`, `date`, `user_id`, `user_email`, `product_id`, `product_name`) VALUES (NULL, CURRENT_TIMESTAMP, '', '', :prod_id, :prod_name)";-->
    
<!--https://ibb.co/Lz1tgmR-->
<!--https://ibb.co/fpv2RVz-->
<!--https://ibb.co/dmfGNys-->
<!--https://ibb.co/6tg3m9K-->
<!--https://ibb.co/RSgLFfj-->
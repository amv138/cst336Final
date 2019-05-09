<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    exit;
    
}
    //addproductapi.php
    //Returns the count of items in the DB and adds an item given.
    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("carmart");
    
    $arr = array();
    
    $arr[":name"] = $_GET["name"];
    $arr[":description"] = $_GET["description"];
    $arr[":image_url"] = $_GET["image_url"];
    $arr[":price"] = $_GET["price"];
  
   $sql = "INSERT INTO products ( `name`, `description`, `image_url`, `price`) 
    VALUES (:name, :description, :image_url, :price)";
   
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    $sql ="SELECT COUNT(1) totalproducts FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($records);
    
    ?>
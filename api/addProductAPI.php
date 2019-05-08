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
    
    $arr[":productName"] = $_GET["productName"];
    $arr[":productDescription"] = $_GET["productDescription"];
    $arr[":productImage"] = $_GET["productImage"];
    $arr[":productPrice"] = $_GET["productPrice"];
  
   $sql = "INSERT INTO products ( `name`, `description`, `image_url`, `price`) 
    VALUES (:productName, :productDescription, :productImage, :productPrice, :catId)";
   
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    $sql ="SELECT COUNT(1) totalproducts FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($records);
    
    ?>
<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    exit;
    
}

    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("carmart");
    
    //$product_id = $_GET['product_id'];
    
    $sql = "UPDATE products
    SET price = :price,
    name = :name, 
    description =  :description, 
    image_url = :image_url
    WHERE products.product_id =  " .  $_GET['product_id'];
    
    $arr = array();
    $arr[":name"] = $_GET["name"];
    $arr[":description"] = $_GET["description"];
    $arr[":image_url"] = $_GET["image_url"];
    $arr[":price"] = $_GET["price"];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    
?>
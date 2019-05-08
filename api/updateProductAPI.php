<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    exit;
    
}

    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("carmart");
    
    //$productId = $_GET['productId'];
    
    $sql = "UPDATE products
    SET price = :productPrice,
    name = :productName, 
    description =  :productDescription, 
    image_url = :productImage
    WHERE products.product_id =  " .  $_GET['productId'];
    
    $arr = array();
    $arr[":productName"] = $_GET["productName"];
    $arr[":productDescription"] = $_GET["productDescription"];
    $arr[":productImage"] = $_GET["productImage"];
    $arr[":productPrice"] = $_GET["productPrice"];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    
?>
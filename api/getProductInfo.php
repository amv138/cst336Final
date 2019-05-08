<?php
    //Returns a product.
    
    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");

    $product_id = $_GET['product_id'];
    
    $sql = "SELECT * FROM products WHERE product_id = $product_id";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($product);

?>
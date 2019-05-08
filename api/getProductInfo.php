<?php
    //Returns a product.
    
    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");

    $productId = $_GET['productId'];
    
    $sql = "SELECT * FROM products WHERE product_id = $productId";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($product);

?>
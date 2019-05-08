<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    header('location: login.html'); //sends users to login screen if they haven't logged in
}

    include 'inc/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");

    $sql = "DELETE FROM `products` WHERE `products`.`product_id` = " . $_POST['product_id'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
   // echo $sql;
    
    header("Location: admin.php");



?>
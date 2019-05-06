<?php

//receives these parameters: action, value1, value2
 include '../inc/dbConnection.php';
 $conn = getDatabaseConnection("ree");

 $action = $_GET['action'];

 $np = array();
 
  switch ($action) {
        
        //value1 min, value2 max
        case "priceRange":    
            //$sql = "INSERT INTO lab8_pixabay (imageURL, keyword) VALUES (:favorite, :keyword)";
                    "SELECT * FROM om_product WHERE price > :value1 AND price < :value2";
                    $np[':value1'] = $_GET['value1'];
                    $np[':value2'] = $_GET['value2'];
                       break;
        case "REEEE":  $sql = "DELETE FROM lab8_pixabay WHERE imageURL = :favorite";
                        $np[':favorite'] = $_GET['favorite'];
                        break;
        //Value 1 is name
        case "name":
                        $sql = "SELECT * FROM om_product WHERE productName = :value1";
                        $np[':value1'] = $_GET['value1'];
                        break;
        //value1 is manufacturer
        case "manufacturer": //display favorite images based on the keyword 
                        $sql = "SELECT * FROM om_product WHERE manufacturer = :value1";
                        $np[':value1'] = $_GET['value1'];
                        break;
                        
    }//switch


    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
    

?>
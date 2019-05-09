<?php

    //Manipulates products.

    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("ree");

    $np = array();
    $sql = "SELECT * FROM products WHERE (price >= :min AND price <= :max)";// AND WHERE nameLIKE %:name% AND WHERE manufacturer LIKE %:manufacturer%";
    $np[':min'] = $_GET['min'];
    $np[':max'] = $_GET['max'];
    if($_GET['name'] != NULL)
    {
        $name = '%' . $_GET['name'] . '%';
        $sql .= " AND (LOWER(name) LIKE LOWER(:name))";
        $np[':name'] = $name;
    }
    if($_GET['description'] != NULL)
    {
        $description = '%' . $_GET['description'] . '%';
        $sql .= " AND (LOWER(description) LIKE LOWER(:description))";
        $np[':description'] = $description;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
    

?>
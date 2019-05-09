<?php

    
    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("finalProject");

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM items WHERE id = $id";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($product);

?>
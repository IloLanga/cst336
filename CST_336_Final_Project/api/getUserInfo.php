<?php

    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("finalProject");
    

    $username = $_GET['username'];
    print_r($username);
    
    $sql = "SELECT * FROM users WHERE username = $username";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($user);
    // echo json_decode($user);

?>
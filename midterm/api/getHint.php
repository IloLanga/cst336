<?php
    include 'dbConnection.php';
    
    $qId = $_GET['questId'];
    $namedParameters = array();
    
    $conn = getDatabaseConnection("midterm");
    $sql = "SELECT * FROM m_hint WHERE questionId = :qId";
    $namedParameters[":qId"] = $_GET['questId'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records); //debugging 
    echo json_encode($records);
?>
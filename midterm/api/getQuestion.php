<?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection("midterm");
    $sql = "SELECT * FROM m_question";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $randomQuestion = json_encode($records[rand(0,count($records)-1)]);
    
    echo ($randomQuestion);
?>
<?php

    include 'dbConnection.php';
    $conn = getDatabaseConnection("p10");
    
    // $arr = array();
    // $arr["questionNb"] = $_GET["questionNb"];
    // $arr["checked"] = $_GET["checked"];
    
    // $sql = "UPDATE poll_response SET :checked = :checked + 1 WHERE pollId = :questionNb";
    
    // $stmt = $conn->prepare($sql);
    // $stmt->execute($arr);
    
    $sql = "SELECT * FROM poll_response ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
    // print_r($records); //displays array content 
    echo json_encode($records);

?>
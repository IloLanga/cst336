<?php

function getDBConnection(){
    $host = "localhost";
    $dbName = "midtermPractice";
    $user = "root";
    $pass = "";
    
    $dsn = "musql:host=$host;dbname=$dbName";
    
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARE => false,
        ];
    
    $pdo = new PDO($dsn, $user, $pass, $opt);
    
    return $pdo;
    
    // echo json_encode($records);
    // $query = "select * from mp_product";
    // $statement= $pdo->prepare($query);
    // $statement->execute;
    
    // $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    // json_encode($records);
    
    
    
}
?>
<?php

//receives these parameters: action, url, keyword

//TO GET THE 2 EXTRA POINTS IN THE HANDS-ON PORTION OF THE FINAL EXAM
//1. Add favorites to database
//2. Remove favorites from database
//3. Display the keywordist from database (use DISTINCT)

 include 'dbConnection.php';
    $conn = getDatabaseConnection("lab8_pixabay");
    
    $arr = array();
    $action = $_GET["action"];
    // $arr[":action"] = $_GET["action"];
    $arr[":url"] = $_GET["url"];
    $arr[":keyword"] = $_GET["keyword"];

switch ($action) {
    
    case "add":
        $sql = "INSERT INTO lab8_pixabay ( `imageURL`, `keyword`) 
    VALUES (:url, :keyword)";
    case "delete":
          $sql = "DELETE FROM lab8_pixabay WHERE imageURL = :url 
    VALUES (:url)";
}

$stmt = $conn->prepare($sql);
$stmt->execute($arr);
//$sql ="SELECT COUNT(1) totalproducts FROM om_product";
//$stmt = $conn->prepare($sql);
//$stmt->execute();
// $records = $stmt->fetch(PDO::FETCH_ASSOC);
// echo json_encode($records);



?>
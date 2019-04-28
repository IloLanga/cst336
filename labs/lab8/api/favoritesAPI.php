<?php

//receives these parameters: action, url, keyword
 include 'dbConnection.php';
 $conn = getDatabaseConnection("heroku_961575b1b250cde");

 $action = $_GET['action'];

 $np = array();
 
  switch ($action) {
        
        case "add":    $sql = "INSERT INTO lab8_pixabay (imageURL, keyword) VALUES (:favorite, :keyword)";
                       $np[':keyword'] = $_GET['keyword'];
                       $np[':favorite'] = $_GET['favorite'];
                       break;
        case "delete":  $sql = "DELETE FROM lab8_pixabay WHERE imageURL = :favorite";
                        $np[':favorite'] = $_GET['favorite'];
                        break;
        case "keyword": //displays list of unique keywords (hint: use DISTINCT)
                        $sql = "SELECT DISTINCT (keyword) FROM lab8_pixabay";
                        break;
        case "favorites": //display favorite images based on the keyword 
                        $sql="SELECT imageURL FROM 'lab8_pixabay' WHERE keyword = :keyword";
                        $np[':keyword'] = $_GET['keyword'];
                        break;
                        
    }//switch

//with select you need to fetch the records, no need for insert

    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    
    if($action == "keyword" || $action == "favorite") {
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo json_encode($records);
    }

?>
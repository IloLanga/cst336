<?php

//receives these parameters: action, url, keyword
 include 'dbConnection.php';
 $conn = getDatabaseConnection("hw4");

 $action = $_GET['action'];

 $arr = array();
 
  switch ($action) {
        
        case "add":    $sql = "INSERT INTO meals (keyword) VALUES (:keyword)";
                       $arr[':keyword'] = $_GET['keyword'];
                       break;
        case "keyword": //displays list of unique keywords (hint: use DISTINCT)
                        $sql = "SELECT DISTINCT(keyword) FROM meals";
                        break;
                        
    }//switch


    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    
    //fetching records when using SELECT
    if ( $action == "keyword") {
     
         $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         echo json_encode($records);
    }

?>
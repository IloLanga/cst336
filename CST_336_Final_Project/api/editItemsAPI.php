<?php
session_start();
//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    exit;
    
}
    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("finalProject");
    
    //$productId = $_GET['productId'];
    
    $sql = "UPDATE items
    SET price = :price,
        name = :name, 
        description =  :description, 
        imageURL = :imageURL,
        size = :size,
        stock = :stock
        WHERE id = :id";
     //catId = :catId
    $arr = array();
    $arr[":stock"] = $_GET["stock"];
    $arr[":size"] = $_GET["size"];
    $arr[":id"] = $_GET["id"];
    $arr[":name"] = $_GET["name"];
    $arr[":description"] = $_GET["description"];
    $arr[":imageURL"] = $_GET["imageURL"];
    $arr[":price"] = $_GET["price"];
   
    //$arr[":catId"] = $_GET["catId"]
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    
?>
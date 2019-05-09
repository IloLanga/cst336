<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");


$name = $_GET['name'];	
$description = $_GET['description'];	
$gender	 = $_GET['gender'];
$type = $_GET['type'];	
$size = $_GET['size'];	
$stock= $_GET['stock'];
$price= $_GET['price'];
$imageURL = $_GET['imageURL'];

$arr = array();

$arr[":name"] = $name;
$arr[":description"] = $description;
$arr[":gender"] = $gender;
$arr[":type"] = $type;
$arr[":size"] = $size;
$arr[":stock"] = $stock;
$arr[":price"] = $price;
$arr[":imageURL"] = $imageURL;

$sql = "INSERT INTO items (name, description, gender, type, size, stock, price, imageURL) VALUES (:name, :description, :gender, :type, :size, :stock, :price, :imageURL)";



$stmt = $conn->prepare($sql);
$stmt->execute($arr);

?>
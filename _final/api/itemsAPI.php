<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");

$action = $_GET['action'];

$imageURL = $_GET['imageURL'];
$name = $_GET['name'];	
$description = $_GET['description'];	
$gender	 = $_GET['gender'];
$type = $_GET['type '];	
$size = $_GET['size'];	
$stock	 = $_GET['stock'];

$sql = "INSERT INTO lab8_pixabay (name, description, gender, type, size, stock, price, imageURL) VALUES (:name, :description, :gender, :type, :size, :stock, :price, :imageURL)";

$arr = array();
$arr[":imageURL"] = $imageURL;
$arr[":name"] = $name;
$arr[":description"] = $description;
$arr[":gender"] = $gender;
$arr[":type"] = $type;
$arr[":size"] = $size;
$arr[":stock"] = $stock;

$stmt = $conn->prepare($sql);
$stmt->execute($arr);

?>
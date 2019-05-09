<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$action = $_GET['action'];

$imageURL = $_GET['imageURL'];
$name = $_GET['name'];	
$description = $_GET['description'];	
$gender	 = $_GET['gender'];
$type = $_GET['type '];	
$size = $_GET['size'];	
$stock	 = $_GET['stock'];

$sql = "SELECT * FROM items";

$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>
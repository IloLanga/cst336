<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$gender	 = $_GET['gender'];

$sql = "SELECT * FROM items WHERE gender = :gender";
$arr = array();
$arr[":gender"] = $gender;

$stmt = $conn->prepare($sql);
$stmt->execute($arr);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>
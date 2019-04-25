<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");

$action = $_GET['action'];


$arr[":stock"] = $stock;

$stmt = $conn->prepare($sql);
$stmt->execute($arr);

?>
<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");
$sql = "SELECT * FROM admin";

$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
echo json_encode($records);
?>
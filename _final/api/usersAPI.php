<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");


$stmt = $conn->prepare($sql);
$stmt->execute($arr);

?>
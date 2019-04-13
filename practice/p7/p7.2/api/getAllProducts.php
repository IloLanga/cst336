<?php
 include 'dbConnection.php';
$conn = getDatabaseConnection("midtermPractice");
$sql = "SELECT * FROM mp_product ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
//print_r($records); //displays array content 
echo json_encode($records);
//echo $records[0]['productName'];
?>
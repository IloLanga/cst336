<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$action = $_GET['action'];

switch($action) {
    case "total" :
        $sql = "SELECT SUM(totalPrice) FROM orders";
        break;
        
    case "average" :
        $sql ="SELECT AVG(totalPrice) FROM orders";
        break;
        
    case "max" :
        $sql = "SELECT MAX(totalPrice) FROM orders";
        break;
}

$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($records);
echo json_encode($records);





?>
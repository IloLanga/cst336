<?php
session_start();

// print_r($_POST);

include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$arr = array();
$arr[':username'] = $username;
$arr[':password'] = $password;

$stmt = $conn->prepare($sql);
$stmt->execute($arr);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($username);

if (empty($record)) {
    echo "Username or Password are incorrect!";
} else {
    $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
    header('location: ../shop/shop.php');
}


?>
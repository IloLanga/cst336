<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$address= $_POST['address'];

$arr= array();
$arr[":username"] = $username;
$arr[":password"] = $password;
$arr[":email"] = $email;
$arr[":address"] = $address;

$sql = "INSERT INTO users (username, password, email, address) VALUES (:username, :password, :email, :address)";


$stmt = $conn->prepare($sql);
$stmt->execute($arr);

?>
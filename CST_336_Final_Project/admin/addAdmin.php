<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

if (!( isset($_POST['username']) && isset($_POST['password']))) {
 echo "Missing input";
 exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$arr1= array();
$arr1[":username"] = $username;
$sqlCheckUser = "SELECT * FROM admin Where username = :username";
$stmt1 = $conn->prepare($sqlCheckUser);
$stmt1->execute($arr1);
$userExists = $stmt1->fetchAll(PDO::FETCH_ASSOC);

if (!empty($record)) {
     echo "Username already exists!";
     exit;
}  else {
    
    $arr2= array();
    $arr2[":username"] = $username;
    $arr2[":password"] = sha1($password);
    
    $sqlInsert = "INSERT INTO admin (username, password) VALUES (:username, :password)";
    
    $stmt2 = $conn->prepare($sqlInsert);
    $stmt2->execute($arr2);
    
}

?>
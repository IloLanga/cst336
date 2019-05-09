<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$username = $_POST['username'];
$password = $_POST['password'];
$cPassword = $_POST['cPassword'];
$email = $_POST['email'];
$address= $_POST['address'];

$arr1= array();
$arr1[":username"] = $username;
$sqlCheckUser = "SELECT * FROM users Where username = :username";
$stmt1 = $conn->prepare($sqlCheckUser);
$stmt1->execute($arr1);
$userExists = $stmt1->fetchAll(PDO::FETCH_ASSOC);

if (strcmp( $password, $cPassword ) !== 0){
    echo "Passwords need to match.";
} elseif (empty($userExists)) {
    echo "Username or Password are incorrect!";
}  else {
    $arr2= array();
    $arr2[":username"] = $username;
    $arr2[":password"] = sha1($password);
    $arr2[":email"] = $email;
    $arr2[":address"] = $address;
    
    $sqlInsert = "INSERT INTO users (username, password, email, address) VALUES (:username, :password, :email, :address)";
    
    $stmt2 = $conn->prepare($sqlInsert);
    $stmt2->execute($arr2);
    
    header('Location: ../signin.php');
    echo "User added successfully!";
}
echo "FAIL"
?>
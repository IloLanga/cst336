<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    header('location: admin_signin.php'); //sends users to login screen if they haven't logged in
}

    include '../inc/dbConnection.php';
    $conn = getDatabaseConnection("finalProject");

    $sql = "DELETE FROM `items` WHERE `items`.`id` = " . $_POST['id'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
   // echo $sql;
    
    header("Location: ../admin/items.php");



?>
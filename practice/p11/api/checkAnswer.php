<?php

//receive email and score from the quiz

include 'dbConnection.php';
$conn = getDatabaseConnection("c9");

$array = array();
$array[":email"] = $_GET["email"];
$array[":score"] = $_GET["score"];

//1. Get latest score based on email

$sql = "SELECT score FROM quiz WHERE email = :email";


//2. If record found, first display it in JSON format, then update record
//3. If record not found, insert a new record for that email


?>
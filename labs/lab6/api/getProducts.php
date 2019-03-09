<?php

$host = "localHost"; //cloud9 database. this is the url to the database
$dbname ="ottermart";
$username = "root";
$password = "";

//establish connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//to retreive data
$sql = "SELECT * FROM om_product ORDER BY productPrice LIMIT 10";
$stmt = $dbConn -> prepare($sql);  //$connection MUST be previously initialized --> here we changed it to dbConn
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //display array content

echo json_encode($records);

?>
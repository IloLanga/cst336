<?php
include "./dbConnection.php";

$db= getDatabaseConnection("midtermPractice");
$query= "select * FROM mp_product";
$statement = $db->prepare($query);
$statement->execute();

$records = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);
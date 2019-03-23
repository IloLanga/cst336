<?php

include 'dbConnection.php';

$conn = getDatabaseConnection("ottermart");

$product = $_GET['productKeyword'];
$category = $_GET['category'];
$priceFrom = $_GET['priceFrom'];
$priceTo = $_GET['priceTo'];
$orderBy = $_GET['orderBy'];

$namedParameters = array();

//This query works BUT it allows SQL INJECTION (because it's using single quotes)
//$sql = "SELECT * FROM `om_product` WHERE productName LIKE '%$product%'";

$sql = "SELECT * FROM `om_product` WHERE 1"; //Retrieves ALL records

if (!empty($product)) { //user entered a product keyword
    $sql .=  " AND productName LIKE :product";
    $namedParameters[":product"] = "%$product%";
}

if(!empty($category)) {
    $sql .= " AND catID = :categoryId";
    $namedParameters[":categoryId"] = $_GET['category'];
}

if(!empty($priceFrom)) {
    $sql .= " AND productPrice >= :priceFrom";
    $namedParameters[":priceFrom"] = $_GET['priceFrom'];
}

if(!empty($priceTo)) {
    $sql .= " AND productPrice <= :priceTo";
    $namedParameters[":priceTo"] = $_GET['priceTo'];
}

if (isset($orderBy)) {
    if (orderBy == "price") {
        $sql .= " ORDER BY productPrice";
    }
    if (orderBy == "name") {
        $sql .= "ORDER BY productName";
    }
}


$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute($namedParameters);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //debugging    

echo json_encode($records);

?>
<?php
    
include '../inc/dbConnection.php'; //get the code from dbConnection.php file

$conn = getDatabaseConnection("finalProject");
$arr1 = array();
$arr2 = array();
$arr3 = array();

//sort by name
if(!empty($_GET['searchItem'])){ //user entered a product keyword
    $sql = "SELECT * FROM items WHERE name LIKE :name AND gender = :gender";
    $arr1[":name"] = "%" . $_GET['searchItem'] . "%";
    $arr1[':gender'] = $_GET['gender'];
    $stmt = $conn->prepare($sql);  //$connection MUST be previously initialized
    $stmt->execute($arr1);
}


//sort by price
if(isset($_GET['lowest'])){
    if($_GET['lowest'] == "lowest"){
        $sql = "SELECT * FROM items WHERE gender = :gender ORDER BY price ASC";
        $arr2[':gender'] = $_GET['gender'];
        $stmt = $conn->prepare($sql);  //$connection MUST be previously initialized
        $stmt->execute($arr2);
    }
    
} 
else if(isset($_GET['highest'])){

    if($_GET['highest'] == "highest"){
        $sql = "SELECT * FROM items WHERE gender = :gender ORDER BY price DESC";
        $arr2[':gender'] = $_GET['gender'];
        $stmt = $conn->prepare($sql);  //$connection MUST be previously initialized
        $stmt->execute($arr2);
    }
   
}


//search by name and price
if(isset($_GET['lowest']) && !empty($_GET['searchItem'])){
        
        $sql= "SELECT * FROM items WHERE name LIKE :name AND gender = :gender ORDER BY price ASC";
        $arr3[":name"] = "%" . $_GET['searchItem'] . "%";
        $arr3[':gender'] = $_GET['gender'];
        $stmt = $conn->prepare($sql);  //$connection MUST be previously initialized
        $stmt->execute($arr3);
}
else if(isset($_GET['highest']) && !empty($_GET['searchItem'])){
        $sql= "SELECT * FROM items WHERE name LIKE :name AND gender = :gender ORDER BY price DESC";
        $arr3[":name"] = "%" . $_GET['searchItem'] . "%";
        $arr3[':gender'] = $_GET['gender'];
        $stmt = $conn->prepare($sql);  //$connection MUST be previously initialized
        $stmt->execute($arr3);
}



$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple
echo json_encode($records);

?>
<?php

//Validates that username is NOT contained in the password


$username = $_GET["username"]; // get what is in the URL
$password = $_GET["pwd"];

//echo $username . "<br>";
//echo $password . "<br>";

$data = array();

if (stripos($password, $username) !== false) {
    //echo "username is included in password";
    $data["validPwd"] = false;
} else {
    //echo "username is NOT included in password";
    $data["validPwd"] = true;
}

?>


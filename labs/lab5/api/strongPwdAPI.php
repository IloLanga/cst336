
<?php

//echo "topS3cr3t!";

$pwdLength = $_GET["length"];

//$letterArray = array("a", "b", "c"...);

$letterArray = range("a","z");

//print_r($letterArray);


$password = "";

for ($i = 0; $i < $pwdLength; $i++) {
    $randomIndex = rand(0, 25); //including 0 and 25
   // $password = $password . $letterArray[$randomIndex]; // dot to concatenate strings
    $password .= $letterArray[$randomIndex];
}

//echo $password;

$password[0] = rand(0, 9); // changing the first character to a random number
$password = str_shuffle($password); //shuffle the letters of the pw
//echo $password;

$data = array();
    $data["suggestedPwd"] = $password;


echo json_encode($data);

?>

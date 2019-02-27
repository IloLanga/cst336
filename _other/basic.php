<?php

$otterId = "good9016";
echo "my otter ID is: " . $otterId; //. to cioncatenate
//declare an array
$newArray = array("one", "two", "three");

$weekDays = array();

$weekDays[] = "Mondays"; // put it at the last place in the array
$weekDays[] = "Tuesday";
array_push($weekDays, "Wednesday", "Thrusday", "Friday");

print_r($weekDays);

echo "</br>";
echo in_array("Tuesday", $weekDays); //check if tuesday in is the array




?>

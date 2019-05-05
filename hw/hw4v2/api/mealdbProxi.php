<?php

//https://pixabay.com/api/?key=5589438-47a0bca778bf23fc2e8c5bf3e&image_type=photo&orientation=horizontal&safesearch=true&per_page=100

$keyword = $_GET['keyword'];

$curl = curl_init(); //client url allow to get info from an url
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.themealdb.com/api/json/v1/1/filter.php?c=$keyword",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache"
      ),
   ));

$jsonData = curl_exec($curl); //get a json format data
$err = curl_error($curl);
curl_close($curl);

// echo $jsonData;

$data = json_decode($jsonData, true); // from json format to an array

echo json_encode($data);

?>
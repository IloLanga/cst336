<?php

//

$keyword = 'mji8JsU8Epoc7tUMO0orQ';

$curl = curl_init(); //client url allow to get info from an url
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.goodreads.com/search.xml?key=$keyword&q=Ender%27s+Game",
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

print_r($jsonData);

//echo $jsonData;

// $data = json_decode($jsonData, true); // from json format to an array

?>
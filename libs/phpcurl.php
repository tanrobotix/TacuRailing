<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.googleapis.com/qpxExpress/v1/trips/search?key=AIzaSyA-Z_OABlCvKJj9Y7VWMNee6TaHQFbXFyI",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"request\": {\r\n    \"slice\": [\r\n      {\r\n        \"origin\": \"NRT\",\r\n        \"destination\": \"ICN\",\r\n        \"date\": \"2017-07-28\"\r\n      }\r\n    ],\r\n    \"passengers\": {\r\n      \"adultCount\": 1,\r\n      \"infantInLapCount\": 0,\r\n      \"infantInSeatCount\": 0,\r\n      \"childCount\": 0,\r\n      \"seniorCount\": 0\r\n    },\r\n    \"solutions\": 20,\r\n    \"refundable\": false\r\n  }\r\n}",
  CURLOPT_SSL_VERIFYPEER=> false,
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 23245fbe-a184-2feb-8f70-373748df28e2"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
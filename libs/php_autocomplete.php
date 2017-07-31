<?php

$fr = $_POST["fr"];
$to = $_POST["to"];
$date = $_POST["date(yy-mm-dd)"];
$number_of_results = $_POST["solution"];

$request_var = 'origin:BOS
                destination:LON
                departure_date:2017-08-10
                number_of_results:5'

$curl = curl_init();

curl_setopt_array($curl, array(
  /*CURLOPT_URL => "https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search?apikey=9ayCYeVIATeYLQMsbp8zbU436IQvrloV&origin=BOS&destination=LON&departure_date=2017-08-10&number_of_results=5",*/

  CURLOPT_URL => "https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search?apikey=9ayCYeVIATeYLQMsbp8zbU436IQvrlo",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => json_encode($request_var)
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 3c335b72-e4b6-1b36-e032-0e80c174838d"
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

?>
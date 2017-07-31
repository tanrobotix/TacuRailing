<?php

$fr = $_POST['fr'];
$to = $_POST['to'];
$departure_date = $_POST['date'];

$data = array ('apikey' => '9ayCYeVIATeYLQMsbp8zbU436IQvrloV',
  'origin' => 'NRT' ,
  'destination' => 'ICN' ,
  'departure_date' => '2017-08-10' ,
  'number_of_results' => '5'
  );

$params = '';
foreach($data as $key=>$value)
  $params .= $key.'='.$value.'&';

$params = trim($params, '&');

echo $params;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POST => COUNT($data),
  CURLOPT_POSTFIELDS => $params,
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 079cce8c-c9c6-fbae-b974-5236b70b42f0"
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
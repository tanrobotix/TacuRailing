<?php

$request = new HttpRequest();
$request->setUrl('https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData(array(
  'apikey' => '9ayCYeVIATeYLQMsbp8zbU436IQvrloV',
  'origin' => $_GET['fr'],
  'destination' => $_GET['to'],
  'departure_date' => $_GET['date'],
  'number_of_results' => '5'
));

$request->setHeaders(array(
  'postman-token' => '5f4898f9-41b5-0174-c065-1bda297308e1',
  'cache-control' => 'no-cache'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

?>
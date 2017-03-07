<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$options = [
  'query' => [
    'query' => 'sarah',
  ],
  'headers' => [
    'accept' => 'application/json',
  ],
];

$res = $client->get('http://opensuggestion.addi.dk/b3.5_2.0/rest/facetSpell', $options);

echo 'Status code: ' . $res->getStatusCode() . "\n";
echo 'Content type: ' . $res->getHeaderLine('content-type') . "\n";
echo 'Response body: ' . $res->getBody();

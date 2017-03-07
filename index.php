<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'http://opensuggestion.addi.dk/b3.5_2.0/rest/facetSpell', ['query' => ['query' => 'sarah']]);
echo $res->getStatusCode();
echo $res->getHeaderLine('content-type');
echo $res->getBody();

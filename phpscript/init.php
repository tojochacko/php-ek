<?php
use Elasticsearch\ClientBuilder;
require './vendor/autoload.php';

$hosts = [
    'host' => 'es01', // ip
    'port' => '9200',
];

$client = ClientBuilder::create()->setHosts($hosts)->build();

$params = array(
    'index' => 'my_index',
    'id'    => 'my_id',
    'body'  => ['myField' => 'Tojo']
);

$response = $client->index($params);
print_r($response);

?>
<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET', 
    'https://jsonplaceholder.typicode.com/posts',
    [
        'query' => [
            'title' => "optio molestias id quia eum"
            // 'id' => 8
        ],
        
    ]
);

// var_dump($response);

echo $response->getBody();
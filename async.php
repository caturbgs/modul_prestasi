<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$promise = $client->requestAsync(
    'GET', 
    'https://jsonplaceholder.typicode.com/posts/1'
);

$promise->then(
    function (Response $res){
        echo $res->getBody();
    },
    function (RequestException $e){
        echo $e->getMessages();
    }
);
$promise->wait();
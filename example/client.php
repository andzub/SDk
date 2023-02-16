<?php

use Api\Client\ClientBuilder;
use Api\Client\Sdk;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;

require_once __DIR__ . '/../vendor/autoload.php';

$token = 'YOUR_JWT_TOKEN';

$clientBuilder = new ClientBuilder();
$clientBuilder->addPlugin(new HeaderDefaultsPlugin([
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
    'Authorization' => sprintf('Bearer %s', $token),
]));

$sdk = new Sdk($clientBuilder);
$response = $sdk->withdrawal()->getList();

dd($response);
<?php

require_once dirname(__FILE__).'/vendor/autoload.php';

$app = new NicolasMugnier\Twitter\App\Application();

// $stream = $app->getContainer()->get('twitter_api_stream_stream');
// $stream->keepAlive();

$client = $app->getContainer()->get('twitter_api_statuses_get_user_timeline');
$response = $client
    ->setCount(1)
    ->execute();

echo $response->getBody();
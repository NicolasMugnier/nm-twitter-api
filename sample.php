<?php

require_once dirname(__FILE__).'/vendor/autoload.php';

$app = new NicolasMugnier\Twitter\App\Application();

$client = $app->getContainer()->get('twitter_api_statuses_get_user_timeline');
$response = $client
    ->setCount(1)
    ->execute();

echo $response->getBody();
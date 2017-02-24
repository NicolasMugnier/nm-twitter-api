<?php

require_once dirname(__FILE__).'/vendor/autoload.php';

$app = new NicolasMugnier\Twitter\App\Application();
$client = $app->getContainer()->get('twitter_api_statuses_get_home_timeline');
$response = $client->setOAuthConsumerKey('lubRW6JeF6nSxDiCemEI6qnx9')
    ->setOAuthConsumerSecret('5BezU2SwNnWz7dH4JG7XgSN0CpA7srgRp0kiCcFlBu8GhDMdqq')
    ->setOAuthTokenSecret('8xIXiMDPRtxNv0IyhrptpESyDOwmEh8FL7NCz6Bg4Csug')
    ->setOAuthToken('115008325-uTQ5Bgvt8LHt43bUWyxWti30ok6fw4GRDZrPKJNW')
    ->execute();

echo '<pre>';var_dump($response);die('</pre>');
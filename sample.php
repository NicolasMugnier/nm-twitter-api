<?php

require_once dirname(__FILE__).'/vendor/autoload.php';

$oauthConsumerKey = '8xIXiMDPRtxNv0IyhrptpESyDOwmEh8FL7NCz6Bg4Csug';
$oauthConsumerSecret = '5BezU2SwNnWz7dH4JG7XgSN0CpA7srgRp0kiCcFlBu8GhDMdqq';
$oauthToken = '115008325-uTQ5Bgvt8LHt43bUWyxWti30ok6fw4GRDZrPKJNW';
$oauthTokenSecret = '8xIXiMDPRtxNv0IyhrptpESyDOwmEh8FL7NCz6Bg4Csug';

$app = new NicolasMugnier\Twitter\App\Application();
$client = $app->getContainer()->get('twitter_api_statuses_get_home_timeline');
$response = $client->setOAuthConsumerKey($oauthConsumerKey)
    ->setOAuthConsumerSecret($oauthConsumerSecret)
    ->setOAuthTokenSecret($oauthTokenSecret)
    ->setOAuthToken($oauthToken)
    ->setCount(1)
    ->execute();

echo '<pre>';var_dump($response->json());die('</pre>');
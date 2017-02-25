# nm-twitter-api

```php
<?php

require_once dirname(__FILE__).'/vendor/autoload.php';

$oauthConsumerKey = '';
$oauthConsumerSecret = '';
$oauthToken = '';
$oauthTokenSecret = '';

$app = new NicolasMugnier\Twitter\App\Application();
$client = $app->getContainer()->get('twitter_api_statuses_get_home_timeline');
$response = $client->setOAuthConsumerKey($oauthConsumerKey)
    ->setOAuthConsumerSecret($oauthConsumerSecret)
    ->setOAuthTokenSecret($oauthTokenSecret)
    ->setOAuthToken($oauthToken)
    ->setCount(1)
    ->execute();

echo $response->json();
```

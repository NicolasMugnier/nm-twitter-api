<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api;

use \GuzzleHttp\Exception\RequestException;
use \GuzzleHttp\Client;

abstract class Request implements RequestInterface
{

    const baseUrl = 'https://api.twitter.com';

    private Client $client;

    protected array $query = [];

    protected array $body = [];

    private string $oauthConsumerKey;

    private string $oauthConsumerSecret;

    private string $oauthNonce;

    private string $oauthToken;

    private string $oauthTokenSecret;

    protected int $timestamp;

    public function getClient(): Client
    {
        return $this->client;
    }

    public function __construct(
        Client $client,
        string $oauthConsumerKey,
        string $oauthConsumerSecret,
        string $oauthToken,
        string $oauthTokenSecret
    ) {
        $this->client = $client;
        $this->oauthConsumerKey = $oauthConsumerKey;
        $this->oauthConsumerSecret = $oauthConsumerSecret;
        $this->oauthToken = $oauthToken;
        $this->oauthTokenSecret = $oauthTokenSecret;
    }

    public function getOAuthConsumerKey(): string
    {
        return $this->oauthConsumerKey;
    }

    public function getOAuthConsumerSecret(): string
    {
        return $this->oauthConsumerSecret;
    }

    public function getOAuthNonce(): string
    {
        if ($this->oauthNonce === null) {
            $this->oauthNonce = base64_encode('5BezU2SwNnWz7dH4JG7XgSN0CpA7srgRp0kiCcFlBu8GhDMdqq' . time());
        }
        return $this->oauthNonce;
    }

    protected function getOAuthSignatureMethod(): string
    {
        return 'HMAC-SHA1';
    }

    protected function getOAuthTimestamp(): int
    {
        if ($this->timestamp === null) {
            $this->timestamp = time();
        }

        return $this->timestamp;
    }

    public function getOAuthToken(): string
    {
        return $this->oauthToken;
    }

    public function getOAuthTokenSecret(): string
    {
        return $this->oauthTokenSecret;
    }

    protected function getOAuthVersion(): string
    {
        return '1.0';
    }

    public function getUrl(): string
    {

        $url = $this->getBaseUrl();

        if (count($this->query) > 0) {

            $tmp = [];
            foreach ($this->query as $param => $value) {
                $tmp[] = $param . '=' . rawurlencode($value);
            }

            $url .= '?' . implode('&', $tmp);
        }

        return $url;
    }

    public function getBaseUrl(): string
    {
        return self::baseUrl . '/' . $this->getVersion() . '/' . $this->getResource() . '/' . $this->getOperation() . '.' . $this->getFormat();
    }

    /**
     * @link https://dev.twitter.com/oauth/overview/creating-signatures
     */
    protected function getOAuthSignature(): string
    {

        $params = [];
        foreach ($this->query as $param => $value) {

            $params[rawurlencode($param)] = rawurlencode($param) . '=' . rawurlencode($value);
        }

        $params[rawurlencode('oauth_consumer_key')] = rawurlencode('oauth_consumer_key') . '=' . rawurlencode($this->getOAuthConsumerKey());
        $params[rawurlencode('oauth_nonce')] = rawurlencode('oauth_nonce') . '=' . rawurlencode($this->getOAuthNonce());
        $params[rawurlencode('oauth_signature_method')] = rawurlencode('oauth_signature_method') . '=' . rawurlencode($this->getOAuthSignatureMethod());
        $params[rawurlencode('oauth_timestamp')] = rawurlencode('oauth_timestamp') . '=' . rawurlencode((string)$this->getOAuthTimestamp());
        $params[rawurlencode('oauth_token')] = rawurlencode('oauth_token') . '=' . rawurlencode($this->getOAuthToken());
        $params[rawurlencode('oauth_version')] = rawurlencode('oauth_version') . '=' . rawurlencode($this->getOAuthVersion());

        ksort($params);

        $outputString = implode('&', $params);

        $signatureBaseString = strtoupper($this->getHttpMethod()) . '&' . rawurlencode($this->getBaseUrl()) . '&' . rawurlencode($outputString);

        return rawurlencode(base64_encode(hash_hmac('SHA1', $signatureBaseString, $this->getSigninKey(), true)));
    }

    protected function getSigninKey(): string
    {
        return rawurlencode($this->getOAuthConsumerSecret()) . '&' . rawurlencode($this->getOAuthTokenSecret());
    }

    public function execute()
    {

        try {

            $method = strtolower($this->getHttpMethod());

            $oauth = 'OAuth ';
            $oauth .= 'oauth_consumer_key="' . $this->getOAuthConsumerKey() . '", ';
            $oauth .= 'oauth_nonce="' . $this->getOAuthNonce() . '", ';
            $oauth .= 'oauth_signature="' . $this->getOAuthSignature() . '", ';
            $oauth .= 'oauth_signature_method="' . $this->getOAuthSignatureMethod() . '", ';
            $oauth .= 'oauth_timestamp="' . $this->getOAuthTimestamp() . '", ';
            $oauth .= 'oauth_token="' . $this->getOAuthToken() . '", ';
            $oauth .= 'oauth_version="' . $this->getOAuthVersion() . '"';

            $params = [
                'headers' => [
                    'Authorization' => $oauth
                ]
            ];
            if (count($this->body) > 0) {
                $params = array_merge($params, $this->body);
            }
            return $this->getClient()->$method($this->getUrl(), $params);
        } catch (RequestException $e) {
            $errorMessage = '---------[MESSAGE]---------' . "\n";
            $errorMessage .= $e->getMessage() . "\n";
            $errorMessage .= "\n" . '----------[REQUEST]----------' . "\n";
            $errorMessage .= $e->getRequest()->getBody();
            if ($e->hasResponse()) {
                $errorMessage .= '----------[RESPONSE]----------' . "\n";
                $errorMessage .= $e->getResponse()->getBody() . "\n";
            }
            throw new \Exception($errorMessage);
        }
    }
}

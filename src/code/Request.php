<?php namespace Twitter\Api;

abstract class Request implements RequestInterface {

    const baseUrl = 'https://api.twitter.com';

    protected $client;

    protected $query = array();

    protected $oauthConsumerKey;

    protected $oauthConsumerSecret;

    protected $oauthNonce;

    protected $oauthToken;

    protected $oauthTokenSecret;

    protected $timestamp = null;

    public function getClient(){
        return $this->client;
    }

    public function __construct(){
        $this->client = new Client();
    }

    public function setOAuthConsumerKey($oauthConsumerKey){
        $this->oauthConsumerKey = $oauthConsumerKey;
        return $this;
    }

    public function getOAuthConsumerKey(){
        return $this->oauthConsumerKey;
    }

    public function setOAuthConsumerSecret($oauthConsumerSecret){
        $this->oauthConsumerSecret = $oauthConsumerSecret;
        return $this;
    }

    public function getOAuthConsumerSecret(){
        return $this->oauthConsumerSecret;
    }

    public function getOAuthNonce(){
        if($this->oauthNonce === null){
            $this->oauthNonce = base64_encode('5BezU2SwNnWz7dH4JG7XgSN0CpA7srgRp0kiCcFlBu8GhDMdqq'.time());
        }
        return $this->oauthNonce;
    }

    protected function getOAuthSignature(){

        $params = [];
        foreach($this->query as $param => $value){

           $params[rawurlencode($param)] = rawurlencode($param).'='.rawurlencode($value);

        }

        $params[rawurlencode('oauth_consumer_key')] = rawurlencode('oauth_consumer_key').'='.rawurlencode($this->getOAuthConsumerKey());
        $params[rawurlencode('oauth_nonce')] = rawurlencode('oauth_nonce').'='.rawurlencode($this->getOAuthNonce());
        $params[rawurlencode('oauth_signature_method')] = rawurlencode('oauth_signature_method').'='.rawurlencode($this->getOAuthSignatureMethod());
        $params[rawurlencode('oauth_timestamp')] = rawurlencode('oauth_timestamp').'='.rawurlencode($this->getOAuthTimestamp());
        $params[rawurlencode('oauth_token')] = rawurlencode('oauth_token').'='.rawurlencode($this->getOAuthToken());
        $params[rawurlencode('oauth_version')] = rawurlencode('oauth_version').'='.rawurlencode($this->getOAuthVersion());

        ksort($params);

        $outputString = implode('&', $params);

        $signatureBaseString = strtoupper($this->getHttpMethod()).'&'.rawurlencode($this->getBaseUrl()).'&'.rawurlencode($outputString);

        return rawurlencode(base64_encode(hash_hmac('SHA1', $signatureBaseString, $this->getSigninKey(), true)));

    }

    protected function getSigninKey(){

        return rawurlencode($this->getOAuthConsumerSecret()).'&'.rawurlencode($this->getOAuthTokenSecret());

    }

    protected function getOAuthSignatureMethod(){
        return 'HMAC-SHA1';
    }

    protected function getOAuthTimestamp(){
        if($this->timestamp === null){
            $this->timestamp = time();
        }

        return $this->timestamp;
    }

    public function setOAuthToken($oauthToken){
        $this->oauthToken = $oauthToken;
        return $this;
    }

    public function getOAuthToken(){
        return $this->oauthToken;
    }

    public function setOAuthTokenSecret($oauthTokenSecret){
        $this->oauthTokenSecret = $oauthTokenSecret;
        return $this;
    }

    public function getOAuthTokenSecret(){
        return $this->oauthTokenSecret;
    }

    protected function getOAuthVersion(){
        return '1.0';
    }

}
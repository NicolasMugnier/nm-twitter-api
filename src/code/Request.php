<?php namespace NicolasMugnier\Twitter\Api;

use \GuzzleHttp\Exception\RequestException;

/**
 * Class Request
 * @package Twitter\Api
 */
abstract class Request implements RequestInterface {

    const baseUrl = 'https://api.twitter.com';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $query = array();

    /** 
     * @var array
     */
    protected $body = array();

    /**
     * @var string
     */
    protected $oauthConsumerKey;

    /**
     * @var string
     */
    protected $oauthConsumerSecret;

    /**
     * @var string
     */
    protected $oauthNonce;

    /**
     * @var string
     */
    protected $oauthToken;

    /**
     * @var string
     */
    protected $oauthTokenSecret;

    /**
     * @var string
     */
    protected $timestamp;

    /**
     * @return Client
     */
    public function getClient(){
        return $this->client;
    }

    public function __construct(
        \GuzzleHttp\Client $client
    ){
        $this->client = $client;
    }

    /**
     * @param $oauthConsumerKey
     * @return $this
     */
    public function setOAuthConsumerKey($oauthConsumerKey){
        $this->oauthConsumerKey = $oauthConsumerKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuthConsumerKey(){
        return $this->oauthConsumerKey;
    }

    /**
     * @param string $oauthConsumerSecret
     * @return $this
     */
    public function setOAuthConsumerSecret($oauthConsumerSecret){
        $this->oauthConsumerSecret = $oauthConsumerSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuthConsumerSecret(){
        return $this->oauthConsumerSecret;
    }

    /**
     * @return string
     */
    public function getOAuthNonce(){
        if($this->oauthNonce === null){
            $this->oauthNonce = base64_encode('5BezU2SwNnWz7dH4JG7XgSN0CpA7srgRp0kiCcFlBu8GhDMdqq'.time());
        }
        return $this->oauthNonce;
    }

    /**
     * @return string
     */
    protected function getOAuthSignatureMethod(){
        return 'HMAC-SHA1';
    }

    /**
     * @return int|string
     */
    protected function getOAuthTimestamp(){
        if($this->timestamp === null){
            $this->timestamp = time();
        }

        return $this->timestamp;
    }

    /**
     * @param $oauthToken
     * @return $this
     */
    public function setOAuthToken($oauthToken){
        $this->oauthToken = $oauthToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuthToken(){
        return $this->oauthToken;
    }

    /**
     * @param $oauthTokenSecret
     * @return $this
     */
    public function setOAuthTokenSecret($oauthTokenSecret){
        $this->oauthTokenSecret = $oauthTokenSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getOAuthTokenSecret(){
        return $this->oauthTokenSecret;
    }

    /**
     * @return string
     */
    protected function getOAuthVersion(){
        return '1.0';
    }

    /**
     * @return string
     */
    public function getUrl(){

        $url = $this->getBaseUrl();

        if(count($this->query) > 0){

            $tmp = [];
            foreach($this->query as $param => $value){
                $tmp[] = $param.'='.rawurlencode($value);
            }

            $url .= '?'.implode('&', $tmp);

        }

        return $url;

    }

    /**
     * @return string
     */
    public function getBaseUrl(){

        return $url = self::baseUrl.'/'.$this->getVersion().'/'.$this->getResource().'/'.$this->getOperation().'.'.$this->getFormat();

    }

    /**
     * @return string
     * @link https://dev.twitter.com/oauth/overview/creating-signatures
     */
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

    /**
     * @return string
     */
    protected function getSigninKey(){

        return rawurlencode($this->getOAuthConsumerSecret()).'&'.rawurlencode($this->getOAuthTokenSecret());

    }

    public function execute(){

        try {

            $method = strtolower($this->getHttpMethod());

            $oauth = 'OAuth ';
            $oauth .= 'oauth_consumer_key="'.$this->getOAuthConsumerKey().'", ';
            $oauth .= 'oauth_nonce="'.$this->getOAuthNonce().'", ';
            $oauth .= 'oauth_signature="'.$this->getOAuthSignature().'", ';
            $oauth .= 'oauth_signature_method="'.$this->getOAuthSignatureMethod().'", ';
            $oauth .= 'oauth_timestamp="'.$this->getOAuthTimestamp().'", ';
            $oauth .= 'oauth_token="'.$this->getOAuthToken().'", ';
            $oauth .= 'oauth_version="'.$this->getOAuthVersion().'"';

            $params = [
                'headers' => [
                    'Authorization' => $oauth
                ]
            ];
            if (count($this->body) > 0) {
                $params = array_merge($params, $this->body);
            }
            return $this->getClient()->$method($this->getUrl(), $params);

        }catch(RequestException $e){
            $errorMessage = '---------[MESSAGE]---------'."\n";
            $errorMessage .= $e->getMessage()."\n";
            $errorMessage .= "\n".'----------[REQUEST]----------'."\n";
            $errorMessage .= $e->getRequest()->getBody();
            if ($e->hasResponse()) {
                $errorMessage .= '----------[RESPONSE]----------'."\n";
                $errorMessage .= $e->getResponse()->getBody() . "\n";
            }
            throw new \Exception($errorMessage);
        }

    }

}
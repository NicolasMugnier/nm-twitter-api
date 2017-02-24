<?php namespace NicolasMugnier\Twitter\Api\Media;

/**
 * Class Base
 * @package NicolasMugnier\Twitter\Api\Media
 */
abstract class Base extends \NicolasMugnier\Twitter\Api\Request {

    /**
     * @var array
     */
    protected $multipart = array();

    /**
     * @return string
     */
    public function getVersion(){
        return '1.1';
    }

    /**
     * @return string
     */
    public function getResource(){
        return 'media';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

    /**
     * @return string
     */
    public function getBaseUrl(){

        return $url = 'https://upload.twitter.com/'.$this->getVersion().'/'.$this->getResource().'/'.$this->getOperation().'.'.$this->getFormat();

    }

    /**
     * @return string
     * @link https://dev.twitter.com/oauth/overview/creating-signatures
     * @link https://dev.twitter.com/rest/public/uploading-media
     */
    protected function getOAuthSignature(){

        $params = [];

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

            $body = new \GuzzleHttp\Post\PostBody();
            $body->forceMultipartUpload(true);
            $body->replaceFields(['media_data' => $this->multipart['media_data']]);

            return $this->getClient()->$method($this->getUrl(),
                [
                    'headers' => [
                        'Authorization' => $oauth,
                        'Content-Type' => 'application/octet-stream'
                    ],
                    'body' => $body
                ]
            );

        }catch(RequestException $e){

            $errorMessage = '---------[MESSAGE]---------'."\n";
            $errorMessage .= $e->getMessage()."\n";
            $errorMessage .= "\n".'----------[REQUEST]----------'."\n";
            $errorMessage .= $e->getRequest();
            if ($e->hasResponse()) {
                $errorMessage .= '----------[RESPONSE]----------'."\n";
                $errorMessage .= $e->getResponse() . "\n";
            }
            echo $errorMessage;die();
        }

    }

}
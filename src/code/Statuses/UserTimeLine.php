<?php namespace Twitter\Api\Statuses;

use \GuzzleHttp\Exception\RequestException;

class UserTimeLine extends Base {

    public function setUserId($userId){
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName($screenName){
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setSinceId($sinceId){
        $this->query['since_id'] = $sinceId;
        return $this;
    }

    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    public function setMaxId($maxId){
        $this->query['max_id'] = $maxId;
        return $this;
    }

    public function setTrimUser($trimUser){
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function setExcludeReplies($excludeReplies){
        $this->query['exclude_replies'] = $excludeReplies;
        return $this;
    }

    public function setContributorDetails($contributorDetails){
        $this->query['contributor_details'] = $contributorDetails;
        return $this;
    }

    public function setIncludeRst($includeRst){
        $this->query['include_rst'] = $includeRst;
        return $this;
    }

    public function getOperation(){

        return 'user_timeline';

    }

    public function getHttpMethod(){
        return 'GET';
    }

    public function execute(){

        try {

            $oauth = 'OAuth ';
            $oauth .= 'oauth_consumer_key="'.$this->getOAuthConsumerKey().'", ';
            $oauth .= 'oauth_nonce="'.$this->getOAuthNonce().'", ';
            $oauth .= 'oauth_signature="'.$this->getOAuthSignature().'", ';
            $oauth .= 'oauth_signature_method="'.$this->getOAuthSignatureMethod().'", ';
            $oauth .= 'oauth_timestamp="'.$this->getOAuthTimestamp().'", ';
            $oauth .= 'oauth_token="'.$this->getOAuthToken().'", ';
            $oauth .= 'oauth_version="'.$this->getOAuthVersion().'"';

            return $this->getClient()->get($this->getUrl(),
                [
                    'headers' => [
                        'Authorization' => $oauth
                    ]
                ]
            );

        }catch(RequestException $e){

            $errorMessage = "\n".'----------[REQUEST]----------'."\n";
            $errorMessage .= $e->getRequest();
            if ($e->hasResponse()) {
                $errorMessage .= '----------[RESPONSE]----------'."\n";
                $errorMessage .= $e->getResponse() . "\n";
            }
            echo $errorMessage;die();
        }

    }

}
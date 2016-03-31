<?php namespace Twitter\Api\Collections;

class GetList extends Base {

    public function setUserId($userId){
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName($screenName){
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setTweetId($tweetId){
        $this->query['tweet_id'] = $tweetId;
        return $this;
    }

    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    public function setCursor($cursor){
        $this->query['cursor'] = $cursor;
        return $this;
    }

    public function getOperation()
    {
        return 'list';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

}
<?php namespace Twitter\Api\Friends;

class GetIds extends Base {


    public function setUserId($userId){
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName($screenName){
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setCursor($cursor){
        $this->query['cursor'] = $cursor;
        return $this;
    }

    public function setStringifyIds($stringifyIds){
        $this->query['stringify_ids'] = $stringifyIds;
        return $this;
    }

    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    public function getOperation()
    {
        return 'ids';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
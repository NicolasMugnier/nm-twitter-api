<?php namespace Twitter\Api\Lists;

class GetList extends Base {

    public function setUserId($userId){
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName($screenName){
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setReverse($reverse){
        $this->query['reverse'] = $reverse;
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
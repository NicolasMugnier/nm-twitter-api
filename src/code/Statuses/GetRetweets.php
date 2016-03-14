<?php namespace Twitter\Api\Statuses;

/**
 * Class GetRetweets
 * @package Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweets/%3Aid
 */
class GetRetweets extends Base {

    /**
     * @param $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @param $count
     * @return $this
     */
    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    /**
     * @param $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser){
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'retweets';
    }

    /**
     * @return string
     */
    function getHttpMethod()
    {
        return 'GET';
    }
}
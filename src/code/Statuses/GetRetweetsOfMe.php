<?php namespace Twitter\Api\Statuses;

/**
 * Class GetRetweetsOfMe
 * @package Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweets_of_me
 */
class GetRetweetsOfMe extends Base {

    /**
     * @param $count
     * @return $this
     */
    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    /**
     * @param $sinceId
     * @return $this
     */
    public function setSinceId($sinceId){
        $this->query['since_id'] = $sinceId;
        return $this;
    }

    /**
     * @param $maxId
     * @return $this
     */
    public function setMaxId($maxId){
        $this->query['max_id'] = $maxId;
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
     * @param $includeEntities
     * @return $this
     */
    public function setIncludeEntities($includeEntities){
        $this->query['include_entities'] = $includeEntities;
        return $this;
    }

    /**
     * @param $includeUserEntities
     * @return $this
     */
    public function setIncludeUserEntities($includeUserEntities){
        $this->query['include_user_entities'] = $includeUserEntities;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'retweets_of_me';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }
}
<?php namespace Twitter\Api\Statuses;

/**
 * Class GetUserTimeLine
 * @package Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/get/statuses/user_timeline
 */
class GetUserTimeLine extends Base {

    /**
     * @param int $userId
     * @return $this
     */
    public function setUserId($userId){
        $this->query['user_id'] = $userId;
        return $this;
    }

    /**
     * @param string $screenName
     * @return $this
     */
    public function setScreenName($screenName){
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    /**
     * @param int $sinceId
     * @return $this
     */
    public function setSinceId($sinceId){
        $this->query['since_id'] = $sinceId;
        return $this;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    /**
     * @param int $maxId
     * @return $this
     */
    public function setMaxId($maxId){
        $this->query['max_id'] = $maxId;
        return $this;
    }

    /**
     * @param boolean $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser){
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    /**
     * @param boolean $excludeReplies
     * @return $this
     */
    public function setExcludeReplies($excludeReplies){
        $this->query['exclude_replies'] = $excludeReplies;
        return $this;
    }

    /**
     * @param boolean $contributorDetails
     * @return $this
     */
    public function setContributorDetails($contributorDetails){
        $this->query['contributor_details'] = $contributorDetails;
        return $this;
    }

    /**
     * @param boolean $includeRst
     * @return $this
     */
    public function setIncludeRst($includeRst){
        $this->query['include_rst'] = $includeRst;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation(){

        return 'user_timeline';

    }

    /**
     * @return string
     */
    public function getHttpMethod(){
        return 'GET';
    }

}
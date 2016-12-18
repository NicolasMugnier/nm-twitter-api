<?php namespace Twitter\Api\Statuses;

class GetHomeTimeLine extends Base {

    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    public function setSinceId($sinceId){
        $this->query['since_id'] = $sinceId;
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

    public function setIncludeEntities($includeEntities){
        $this->query['include_entities'] = $includeEntities;
        return $this;
    }

    public function getOperation()
    {
        return 'home_timeline';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

}
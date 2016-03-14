<?php namespace Twitter\Api\Statuses;

/**
 * Class GetLookup
 * @package Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/get/statuses/lookup
 */
class GetLookup extends Base {

    /**
     * @param $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
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
     * @param $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser){
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    /**
     * @param $map
     * @return $this
     */
    public function setMap($map){
        $this->query['map'] = $map;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'lookup';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }
}
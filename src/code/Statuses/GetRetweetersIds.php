<?php namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * Class GetRetweetersIds
 * @package NicolasMugnier\Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweeters/ids
 */
class GetRetweetersIds extends Base {

    /**
     * @param $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @param $cursor
     * @return $this
     */
    public function setCursor($cursor){
        $this->query['cursor'] = $cursor;
        return $this;
    }

    /**
     * @param $stringifyIds
     * @return $this
     */
    public function setStringifyIds($stringifyIds){
        $this->query['stringify_ids'] = $stringifyIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'retweeters/ids';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }
}
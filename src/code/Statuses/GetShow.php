<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/show/%3Aid
 */
class GetShow extends AbstractStatus
{

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @param $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser)
    {
        $this->query['trim_iser'] = $trimUser;
        return $this;
    }

    /**
     * @param $includeMyRetweet
     * @return $this
     */
    public function setIncludeMyRetweet($includeMyRetweet)
    {
        $this->query['include_my_retweet'] = $includeMyRetweet;
        return $this;
    }

    /**
     * @param $includeEntities
     * @return $this
     */
    public function setIncludeEntities($includeEntities)
    {
        $this->query['include_entities'] = $includeEntities;
        return $this;
    }

    public function getOperation(): string
    {
        return 'show';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}

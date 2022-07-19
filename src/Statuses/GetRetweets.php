<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweets/%3Aid
 */
class GetRetweets extends AbstractStatus
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
     * @param $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->query['count'] = $count;
        return $this;
    }

    /**
     * @param $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser)
    {
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function getOperation(): string
    {
        return 'retweets';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}

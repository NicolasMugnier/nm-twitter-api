<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/post/statuses/retweet/%3Aid
 */
class PostRetweet extends AbstractStatus
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
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function getOperation(): string
    {
        return 'retweet';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/post/statuses/destroy/%3Aid
 */
class PostDestroy extends AbstractStatus
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
        return 'destroy';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

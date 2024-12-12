<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweets/%3Aid
 */
class GetRetweets extends AbstractStatus
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setCount(int $count): self
    {
        $this->query['count'] = $count;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
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

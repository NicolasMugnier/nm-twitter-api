<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/post/statuses/retweet/%3Aid
 */
class PostRetweet extends AbstractStatus
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
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

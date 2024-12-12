<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/post/statuses/unretweet/%3Aid
 */
class PostUnretweet extends AbstractStatus
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
        return 'unretweet';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

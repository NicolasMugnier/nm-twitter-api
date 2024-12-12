<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/show/%3Aid
 */
class GetShow extends AbstractStatus
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
    {
        $this->query['trim_iser'] = $trimUser;
        return $this;
    }

    public function setIncludeMyRetweet(bool $includeMyRetweet): self
    {
        $this->query['include_my_retweet'] = $includeMyRetweet;
        return $this;
    }

    public function setIncludeEntities(bool $includeEntities): self
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

<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweets_of_me
 */
class GetRetweetsOfMe extends AbstractStatus
{
    public function setCount(int $count): self
    {
        $this->query['count'] = $count;
        return $this;
    }

    public function setSinceId(int $sinceId): self
    {
        $this->query['since_id'] = $sinceId;
        return $this;
    }

    public function setMaxId(int $maxId): self
    {
        $this->query['max_id'] = $maxId;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
    {
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function setIncludeEntities(bool $includeEntities): self
    {
        $this->query['include_entities'] = $includeEntities;
        return $this;
    }

    public function setIncludeUserEntities(bool $includeUserEntities): self
    {
        $this->query['include_user_entities'] = $includeUserEntities;
        return $this;
    }

    public function getOperation(): string
    {
        return 'retweets_of_me';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

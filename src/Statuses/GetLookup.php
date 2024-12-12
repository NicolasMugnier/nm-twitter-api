<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/lookup
 */
class GetLookup extends AbstractStatus
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setIncludeEntities(bool $includeEntities): self
    {
        $this->query['include_entities'] = $includeEntities;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
    {
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function setMap(bool $map): self
    {
        $this->query['map'] = $map;
        return $this;
    }

    public function getOperation(): string
    {
        return 'lookup';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

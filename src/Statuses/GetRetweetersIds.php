<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/retweeters/ids
 */
class GetRetweetersIds extends AbstractStatus
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setCursor(int $cursor): self
    {
        $this->query['cursor'] = $cursor;
        return $this;
    }

    public function setStringifyIds(bool $stringifyIds): self
    {
        $this->query['stringify_ids'] = $stringifyIds;
        return $this;
    }

    public function getOperation(): string
    {
        return 'retweeters/ids';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

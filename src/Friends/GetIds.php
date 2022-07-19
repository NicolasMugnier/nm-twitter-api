<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Friends;

class GetIds extends AbstractFriends
{

    public function setUserId(int $userId): self
    {
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName(string $screenName): self
    {
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setCursor(string $cursor): self
    {
        $this->query['cursor'] = $cursor;
        return $this;
    }

    public function setStringifyIds(array $stringifyIds): self
    {
        $this->query['stringify_ids'] = $stringifyIds;
        return $this;
    }

    public function setCount(int $count): self
    {
        $this->query['count'] = $count;
        return $this;
    }

    public function getOperation(): string
    {
        return 'ids';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

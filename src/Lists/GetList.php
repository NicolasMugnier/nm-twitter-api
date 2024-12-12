<?php

namespace NicolasMugnier\Twitter\Api\Lists;

class GetList extends Base
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

    public function setReverse(bool $reverse): self
    {
        $this->query['reverse'] = $reverse;
        return $this;
    }

    public function getOperation(): string
    {
        return 'list';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

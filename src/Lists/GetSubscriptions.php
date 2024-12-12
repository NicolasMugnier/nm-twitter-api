<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscriptions extends Base
{
    public function getOperation(): string
    {
        return 'subscriptions';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

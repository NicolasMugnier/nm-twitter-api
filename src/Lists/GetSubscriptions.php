<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscriptions extends Base
{
    function getOperation(): string
    {
        return 'subscriptions';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}
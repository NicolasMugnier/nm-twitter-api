<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscribers extends Base
{
    function getOperation(): string
    {
        return 'subscribers';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}

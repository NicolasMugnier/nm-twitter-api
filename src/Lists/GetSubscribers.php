<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscribers extends Base
{
    public function getOperation(): string
    {
        return 'subscribers';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

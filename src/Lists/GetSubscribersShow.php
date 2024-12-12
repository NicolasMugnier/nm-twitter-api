<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscribersShow extends Base
{
    public function getOperation(): string
    {
        return 'subscribers/show';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

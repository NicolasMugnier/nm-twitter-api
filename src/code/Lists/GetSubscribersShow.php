<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscribersShow extends Base
{
    function getOperation(): string
    {
        return 'subscribers/show';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}

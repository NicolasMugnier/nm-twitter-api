<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetShow extends Base
{
    function getOperation(): string
    {
        return 'show';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}

<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetStatuses extends Base
{
    function getOperation(): string
    {
        return 'statuses';
    }

    function getHttpMethod(): string
    {
        return 'GET';
    }
}

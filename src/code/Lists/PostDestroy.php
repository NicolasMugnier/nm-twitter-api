<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostDestroy extends Base
{
    function getOperation(): string
    {
        return 'destroy';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostCreate extends Base
{
    function getOperation(): string
    {
        return 'create';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

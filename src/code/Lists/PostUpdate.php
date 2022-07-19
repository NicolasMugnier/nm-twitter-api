<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostUpdate extends Base
{

    function getOperation(): string
    {
        return 'update';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

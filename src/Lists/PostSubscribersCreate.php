<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostSubscribersCreate extends Base
{

    function getOperation(): string
    {
        return 'subscribers/create';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

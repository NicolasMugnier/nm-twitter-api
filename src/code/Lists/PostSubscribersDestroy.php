<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostSubscribersDestroy extends Base
{

    function getOperation(): string
    {
        return 'subscribers/destroy';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

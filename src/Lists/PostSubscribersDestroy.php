<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostSubscribersDestroy extends Base
{
    public function getOperation(): string
    {
        return 'subscribers/destroy';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

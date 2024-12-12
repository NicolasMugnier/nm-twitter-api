<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostSubscribersCreate extends Base
{
    public function getOperation(): string
    {
        return 'subscribers/create';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

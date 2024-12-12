<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostDestroy extends Base
{
    public function getOperation(): string
    {
        return 'destroy';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

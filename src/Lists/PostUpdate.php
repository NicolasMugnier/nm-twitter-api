<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostUpdate extends Base
{
    public function getOperation(): string
    {
        return 'update';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

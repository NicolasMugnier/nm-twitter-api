<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostCreate extends Base
{
    public function getOperation(): string
    {
        return 'create';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

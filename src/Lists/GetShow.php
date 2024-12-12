<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetShow extends Base
{
    public function getOperation(): string
    {
        return 'show';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

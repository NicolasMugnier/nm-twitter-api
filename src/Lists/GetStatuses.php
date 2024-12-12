<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetStatuses extends Base
{
    public function getOperation(): string
    {
        return 'statuses';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

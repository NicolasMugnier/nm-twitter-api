<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetMemberships extends Base
{
    public function getOperation(): string
    {
        return 'memberships';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

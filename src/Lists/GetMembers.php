<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetMembers extends Base
{
    public function getOperation(): string
    {
        return 'members';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

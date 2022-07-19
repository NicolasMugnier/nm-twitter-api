<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class GetMembersShow extends Base
{
    public function getOperation(): string
    {
        return 'members/show';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

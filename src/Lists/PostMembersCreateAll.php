<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersCreateAll extends Base
{
    public function getOperation(): string
    {
        return 'members/create_all';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

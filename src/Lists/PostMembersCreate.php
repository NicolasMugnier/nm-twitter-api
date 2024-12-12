<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersCreate extends Base
{
    public function getOperation(): string
    {
        return 'members/create';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

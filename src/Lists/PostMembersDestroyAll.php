<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersDestroyAll extends Base
{
    public function getOperation(): string
    {
        return 'members/destroy_all';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

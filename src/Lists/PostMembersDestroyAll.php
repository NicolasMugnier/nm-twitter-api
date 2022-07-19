<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersDestroyAll extends Base
{

    function getOperation(): string
    {
        return 'members/destroy_all';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

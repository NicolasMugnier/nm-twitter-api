<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersCreateAll extends Base
{
    function getOperation(): string
    {
        return 'members/create_all';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

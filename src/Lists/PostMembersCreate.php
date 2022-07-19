<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersCreate extends Base
{
    function getOperation(): string
    {
        return 'members/create';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

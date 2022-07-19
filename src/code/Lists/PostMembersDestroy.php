<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersDestroy extends Base
{

    function getOperation(): string
    {
        return 'members/destroy';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

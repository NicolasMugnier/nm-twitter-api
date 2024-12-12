<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersDestroy extends Base
{
    public function getOperation(): string
    {
        return 'members/destroy';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Friends;

use \NicolasMugnier\Twitter\Api\Request;

abstract class AbstractFriends extends Request
{
    public function getResource(): string
    {
        return 'friends';
    }
}

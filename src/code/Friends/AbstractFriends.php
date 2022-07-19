<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Friends;

use \NicolasMugnier\Twitter\Api\Request;

abstract class AbstractFriends extends Request
{

    public function getVersion(): string
    {
        return '1.1';
    }

    public function getResource(): string
    {
        return 'friends';
    }

    public function getFormat(): string
    {
        return 'json';
    }
}

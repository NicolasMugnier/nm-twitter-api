<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

use \NicolasMugnier\Twitter\Api\Request;

abstract class Base extends Request
{
    public function getResource(): string
    {
        return 'lists';
    }
}

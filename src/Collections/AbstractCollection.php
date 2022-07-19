<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

use \NicolasMugnier\Twitter\Api\Request;

abstract class AbstractCollection extends Request
{
    public function getResource(): string
    {
        return 'collections';
    }
}

<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

use \NicolasMugnier\Twitter\Api\Request;

abstract class Base extends Request
{

    public function getVersion(): string
    {
        return '1.1';
    }

    public function getResource(): string
    {
        return 'collections';
    }

    public function getFormat(): string
    {
        return 'json';
    }
}

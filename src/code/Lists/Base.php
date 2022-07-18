<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Lists;

use \NicolasMugnier\Twitter\Api\Request;

abstract class Base extends Request
{
    public function getVersion(): string
    {
        return '1.1';
    }

    public function getResource(): string
    {
        return 'lists';
    }

    public function getFormat(): string
    {
        return 'json';
    }
}

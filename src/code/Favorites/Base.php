<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Favorites;

use \NicolasMugnier\Twitter\Api\Request;

abstract class Base extends Request
{

    public function getVersion(): string
    {
        return '1.1';
    }

    public function getResource(): string
    {
        return 'favorites';
    }

    public function getFormat(): string
    {
        return 'json';
    }
}

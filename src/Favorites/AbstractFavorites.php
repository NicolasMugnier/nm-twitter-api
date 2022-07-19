<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Favorites;

use \NicolasMugnier\Twitter\Api\Request;

abstract class AbstractFavorites extends Request
{
    public function getResource(): string
    {
        return 'favorites';
    }
}

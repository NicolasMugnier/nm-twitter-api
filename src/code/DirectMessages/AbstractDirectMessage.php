<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\DirectMessages;

use \NicolasMugnier\Twitter\Api\Request;

abstract class AbstractDirectMessage extends Request
{
    public function getResource(): string
    {
        return 'direct_messages';
    }
}

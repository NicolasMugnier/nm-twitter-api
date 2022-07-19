<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Statuses;

abstract class AbstractStatus extends \NicolasMugnier\Twitter\Api\Request
{
    public function getResource(): string
    {
        return 'statuses';
    }
}

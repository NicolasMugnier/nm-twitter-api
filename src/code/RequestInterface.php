<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api;

interface RequestInterface
{

    function getOperation(): string;

    function getUrl(): string;

    function getBaseUrl(): string;

    function getHttpMethod(): string;

    function execute(): mixed;

    function getVersion(): string;

    function getFormat(): string;

    function getResource(): string;
}

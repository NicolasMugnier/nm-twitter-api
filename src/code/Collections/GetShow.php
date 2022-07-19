<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

class GetShow extends AbstractCollection
{

    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function getOperation(): string
    {
        return 'show';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

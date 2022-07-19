<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

class PostDestroy extends AbstractCollection
{

    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    function getOperation(): string
    {
        return 'destroy';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

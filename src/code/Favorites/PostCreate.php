<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Favorites;

class PostCreate extends AbstractFavorites
{

    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function getOperation(): string
    {
        return 'create';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

class PostCreate extends AbstractCollection
{
    public function setName(string $name): self
    {
        $this->query['name'] = $name;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->query['description'] = $description;
        return $this;
    }

    public function setUrl(string $url): self
    {
        $this->query['url'] = $url;
        return $this;
    }

    public function setTimelineOrder(string $timelineOrder): self
    {
        $this->query['timeline_order'] = $timelineOrder;
        return $this;
    }

    function getOperation(): string
    {
        return 'create';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

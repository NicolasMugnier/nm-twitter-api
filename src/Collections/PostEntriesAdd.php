<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

class PostEntriesAdd extends AbstractCollection
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setTweetId(int $tweetId): self
    {
        $this->query['tweet_id'] = $tweetId;
        return $this;
    }

    public function setRelativeTo(string $relativeTo): self
    {
        $this->query['relative_to'] = $relativeTo;
        return $this;
    }

    public function setAbove(string $above): self
    {
        $this->query['above'] = $above;
        return $this;
    }

    function getOperation(): string
    {
        return 'entries/add';
    }

    function getHttpMethod(): string
    {
        return 'POST';
    }
}

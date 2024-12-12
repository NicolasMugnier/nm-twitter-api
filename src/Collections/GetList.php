<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Collections;

class GetList extends AbstractCollection
{
    public function setUserId(string $userId): self
    {
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName(string $screenName): self
    {
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setTweetId(string $tweetId): self
    {
        $this->query['tweet_id'] = $tweetId;
        return $this;
    }

    public function setCount(int $count): self
    {
        $this->query['count'] = $count;
        return $this;
    }

    public function setCursor(string $cursor): self
    {
        $this->query['cursor'] = $cursor;
        return $this;
    }

    public function getOperation(): string
    {
        return 'list';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

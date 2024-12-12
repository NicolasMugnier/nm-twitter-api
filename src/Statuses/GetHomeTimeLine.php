<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Statuses;

class GetHomeTimeLine extends AbstractStatus
{
    public function setCount(int $count): self
    {
        $this->query['count'] = $count;
        return $this;
    }

    public function setSinceId(int $sinceId): self
    {
        $this->query['since_id'] = $sinceId;
        return $this;
    }

    public function setMaxId(int $maxId): self
    {
        $this->query['max_id'] = $maxId;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
    {
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function setExcludeReplies(bool $excludeReplies): self
    {
        $this->query['exclude_replies'] = $excludeReplies;
        return $this;
    }

    public function setContributorDetails(bool $contributorDetails): self
    {
        $this->query['contributor_details'] = $contributorDetails;
        return $this;
    }

    public function setIncludeEntities(bool $includeEntities): self
    {
        $this->query['include_entities'] = $includeEntities;
        return $this;
    }

    public function getOperation(): string
    {
        return 'home_timeline';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

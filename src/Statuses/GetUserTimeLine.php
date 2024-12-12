<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/user_timeline
 */
class GetUserTimeLine extends AbstractStatus
{
    public function setUserId(int $userId): self
    {
        $this->query['user_id'] = $userId;
        return $this;
    }

    public function setScreenName(string $screenName): self
    {
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    public function setSinceId(int $sinceId): self
    {
        $this->query['since_id'] = $sinceId;
        return $this;
    }

    public function setCount(int $count): self
    {
        $this->query['count'] = $count;
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

    public function setIncludeRst(bool $includeRst): self
    {
        $this->query['include_rst'] = $includeRst;
        return $this;
    }

    public function getOperation(): string
    {
        return 'user_timeline';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

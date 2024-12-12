<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/post/statuses/update
 */
class PostUpdate extends AbstractStatus
{
    public function setStatus(string $status): self
    {
        $this->query['status'] = $status;
        return $this;
    }

    public function setInReplyToStatusId(int $id): self
    {
        $this->query['in_reply_to_status_id'] = $id;
        return $this;
    }

    public function setPossiblySensitive(bool $possiblySensitive): self
    {
        $this->query['possibly_sensitive'] = $possiblySensitive;
        return $this;
    }

    public function setLat(float $lat): self
    {
        $this->query['lat'] = $lat;
        return $this;
    }

    public function setLong(float $long): self
    {
        $this->query['long'] = $long;
        return $this;
    }

    public function setPlaceId(int $placeId): self
    {
        $this->query['place_id'] = $placeId;
        return $this;
    }

    public function setDisplayCoordinates(bool $displayCoordinates): self
    {
        $this->query['display_coordinates'] = $displayCoordinates;
        return $this;
    }

    public function setTrimUser(bool $trimUser): self
    {
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    public function setMediaIds(string $mediaIds): self
    {
        $this->query['media_ids'] = $mediaIds;
        return $this;
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }

    function getOperation(): string
    {
        return 'update';
    }
}

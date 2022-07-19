<?php

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/post/statuses/update
 */
class PostUpdate extends AbstractStatus
{

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->query['status'] = $status;
        return $this;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setInReplyToStatusId($id)
    {
        $this->query['in_reply_to_status_id'] = $id;
        return $this;
    }

    /**
     * @param boolean $possiblySensitive
     * @return $this
     */
    public function setPossiblySensitive($possiblySensitive)
    {
        $this->query['possibly_sensitive'] = $possiblySensitive;
        return $this;
    }

    /**
     * @param float $lat
     * @return $this
     */
    public function setLat($lat)
    {
        $this->query['lat'] = $lat;
        return $this;
    }

    /**
     * @param float $long
     * @return $this
     */
    public function setLong($long)
    {
        $this->query['long'] = $long;
        return $this;
    }

    /**
     * @param string $placeId
     * @return $this
     */
    public function setPlaceId($placeId)
    {
        $this->query['place_id'] = $placeId;
        return $this;
    }

    /**
     * @param boolean $displayCoordinates
     * @return $this
     */
    public function setDisplayCoordinates($displayCoordinates)
    {
        $this->query['display_coordinates'] = $displayCoordinates;
        return $this;
    }

    /**
     * @param boolean $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser)
    {
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    /**
     * @param int $mediaIds
     * @return $this
     */
    public function setMediaIds($mediaIds)
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

<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Media;

/**
 * @link https://dev.twitter.com/rest/reference/post/media/upload
 */
class PostUpload extends AbstractMedia
{
    public function setMedia(string $media): self
    {
        $this->multipart['media'] = $media;
        return $this;
    }

    public function setMediaData(string $mediaData): self
    {
        $this->multipart['media_data'] = $mediaData;
        return $this;
    }

    public function setAdditionalOwners(string $additionalOwners): self
    {
        $this->query['additional_owners'] = $additionalOwners;
        return $this;
    }

    public function getOperation(): string
    {
        return 'upload';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

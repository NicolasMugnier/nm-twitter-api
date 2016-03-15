<?php namespace Twitter\Api\Media;

/**
 * Class PostUpload
 * @package Twitter\Api\Media
 * @link https://dev.twitter.com/rest/reference/post/media/upload
 */
class PostUpload extends Base {

    /**
     * @param $media
     * @return $this
     */
    public function setMedia($media){
        $this->multipart['media'] = $media;
        return $this;
    }

    /**
     * @param $mediaData
     * @return $this
     */
    public function setMediaData($mediaData){
        $this->multipart['media_data'] = $mediaData;
        return $this;
    }

    /**
     * @param $additionalOwners
     * @return $this
     */
    public function setAdditionalOwners($additionalOwners){
        $this->query['additional_owners'] = $additionalOwners;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'upload';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'POST';
    }
}
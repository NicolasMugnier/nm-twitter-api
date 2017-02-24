<?php namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * Class PostRetweet
 * @package NicolasMugnier\Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/post/statuses/retweet/%3Aid
 */
class PostRetweet extends Base {

    /**
     * @param $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @param $trimUser
     * @return $this
     */
    public function setTrimUser($trimUser){
        $this->query['trim_user'] = $trimUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'retweet';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'POST';
    }
}
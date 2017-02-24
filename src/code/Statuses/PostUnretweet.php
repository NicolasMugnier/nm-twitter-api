<?php namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * Class PostUnretweet
 * @package NicolasMugnier\Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/post/statuses/unretweet/%3Aid
 */
class PostUnretweet extends Base {

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
        return 'unretweet';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'POST';
    }
}
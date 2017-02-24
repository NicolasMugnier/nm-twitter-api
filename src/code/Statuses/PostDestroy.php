<?php namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * Class PostDestroy
 * @package NicolasMugnier\Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/post/statuses/destroy/%3Aid
 */
class PostDestroy extends Base {

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
        return 'destroy';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'POST';
    }
}
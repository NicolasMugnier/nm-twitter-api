<?php namespace NicolasMugnier\Twitter\Api\Collections;

/**
 * Class GetList
 *
 * @package   NicolasMugnier\Twitter\Api\Collections
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class GetList extends Base {

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId){
        $this->query['user_id'] = $userId;
        return $this;
    }

    /**
     * @param string $screenName
     * @return $this
     */
    public function setScreenName($screenName){
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    /**
     * @param string $tweetId
     * @return $this
     */
    public function setTweetId($tweetId){
        $this->query['tweet_id'] = $tweetId;
        return $this;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count){
        $this->query['count'] = $count;
        return $this;
    }

    /**
     * @param string $cursor
     * @return $this
     */
    public function setCursor($cursor){
        $this->query['cursor'] = $cursor;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'list';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }

}
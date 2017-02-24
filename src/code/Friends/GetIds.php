<?php namespace NicolasMugnier\Twitter\Api\Friends;

/**
 * Class GetIds
 *
 * @package   NicolasMugnier\Twitter\Api\Friends
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class GetIds extends Base {

    /**
     * @param int $userId
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
     * @param string $cursor
     * @return $this
     */
    public function setCursor($cursor){
        $this->query['cursor'] = $cursor;
        return $this;
    }

    /**
     * @param array $stringifyIds
     * @return $this
     */
    public function setStringifyIds($stringifyIds){
        $this->query['stringify_ids'] = $stringifyIds;
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
     * @return string
     */
    public function getOperation()
    {
        return 'ids';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }
}
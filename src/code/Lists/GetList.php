<?php namespace NicolasMugnier\Twitter\Api\Lists;

/**
 * Class GetList
 *
 * @package   NicolasMugnier\Twitter\Api\Lists
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class GetList extends Base {

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
     * @param string $reverse
     * @return $this
     */
    public function setReverse($reverse){
        $this->query['reverse'] = $reverse;
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
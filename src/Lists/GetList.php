<?php

namespace NicolasMugnier\Twitter\Api\Lists;

class GetList extends Base
{

    /**
     * @param int $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->query['user_id'] = $userId;
        return $this;
    }

    /**
     * @param string $screenName
     * @return $this
     */
    public function setScreenName($screenName)
    {
        $this->query['screen_name'] = $screenName;
        return $this;
    }

    /**
     * @param string $reverse
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->query['reverse'] = $reverse;
        return $this;
    }

    public function getOperation(): string
    {
        return 'list';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

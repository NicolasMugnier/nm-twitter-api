<?php namespace NicolasMugnier\Twitter\Api\Collections;

/**
 * Class PostEntriesAdd
 *
 * @package   NicolasMugnier\Twitter\Api\Collections
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class PostEntriesAdd extends Base {

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @param int $tweetId
     * @return $this
     */
    public function setTweetId($tweetId){
        $this->query['tweet_id'] = $tweetId;
        return $this;
    }

    /**
     * @param string $relativeTo
     * @return $this
     */
    public function setRelativeTo($relativeTo){
        $this->query['relative_to'] = $relativeTo;
        return $this;
    }

    /**
     * @param string $above
     * @return $this
     */
    public function setAbove($above){
        $this->query['above'] = $above;
        return $this;
    }

    /**
     * @return string
     */
    function getOperation()
    {
        return 'entries/add';
    }

    /**
     * @return string
     */
    function getHttpMethod()
    {
        return 'POST';
    }
}
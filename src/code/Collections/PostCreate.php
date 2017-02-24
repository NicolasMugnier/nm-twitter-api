<?php namespace NicolasMugnier\Twitter\Api\Collections;

/**
 * Class PostCreate
 *
 * @package   NicolasMugnier\Twitter\Api\Collections
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class PostCreate extends Base {

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name){
        $this->query['name'] = $name;
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description){
        $this->query['description'] = $description;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url){
        $this->query['url'] = $url;
        return $this;
    }

    /**
     * @param string $timelineOrder
     * @return $this
     */
    public function setTimelineOrder($timelineOrder){
        $this->query['timeline_order'] = $timelineOrder;
        return $this;
    }

    /**
     * @return string
     */
    function getOperation()
    {
        return 'create';
    }

    /**
     * @return string
     */
    function getHttpMethod()
    {
        return 'POST';
    }
}
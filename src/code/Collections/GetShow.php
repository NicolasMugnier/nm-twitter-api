<?php namespace NicolasMugnier\Twitter\Api\Collections;

/**
 * Class GetShow
 *
 * @package   NicolasMugnier\Twitter\Api\Collections
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class GetShow extends Base {

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation(){
        return 'show';
    }

    /**
     * @return string
     */
    public function getHttpMethod(){
        return 'GET';
    }

}
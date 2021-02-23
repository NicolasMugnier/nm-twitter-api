<?php namespace NicolasMugnier\Twitter\Api\Favorites;

/**
 * Class GetIds
 *
 * @package   NicolasMugnier\Twitter\Api\Favorites
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class PostCreate extends Base {

    /**
     * @param $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'create';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'POST';
    }
}
<?php namespace NicolasMugnier\Twitter\Api\Lists;

/**
 * Class GetMembers
 *
 * @package   NicolasMugnier\Twitter\Api\Lists
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class GetMembers extends Base {

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'members';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }

}
<?php namespace NicolasMugnier\Twitter\Api\Lists;

/**
 * Class Base
 *
 * @package   NicolasMugnier\Twitter\Api\Lists
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail./com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
abstract class Base extends NicolasMugnier\Twitter\Api\Request {

    /**
     * @return string
     */
    public function getVersion(){
        return '1.1';
    }

    /**
     * @return string
     */
    public function getResource(){
        return 'lists';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

}
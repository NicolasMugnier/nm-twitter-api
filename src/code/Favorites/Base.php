<?php namespace NicolasMugnier\Twitter\Api\Favorites;

/**
 * Class Base
 * @package NicolasMugnier\Twitter\Api\Favorites
 * @author Nicolas Mugnier <mugnier.nicolas@gmail.com>
 */
abstract class Base extends \NicolasMugnier\Twitter\Api\Request {

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
        return 'favorites';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

}
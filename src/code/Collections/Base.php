<?php namespace NicolasMugnier\Twitter\Api\Collections;

/**
 * Class Base
 * @package NicolasMugnier\Twitter\Api\Collections
 */
abstract class Base extends \Twitter\Api\Request {

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
        return 'collections';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

}
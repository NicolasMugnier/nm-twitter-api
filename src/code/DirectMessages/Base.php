<?php namespace NicolasMugnier\Twitter\Api\DirectMessages;

/**
 * Class Base
 * @package NicolasMugnier\Twitter\Api\DirectMessages
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
        return 'direct_messages';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

}
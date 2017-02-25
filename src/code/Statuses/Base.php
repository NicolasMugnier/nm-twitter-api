<?php namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * Class Base
 * @package NicolasMugnier\Twitter\Api\Statuses
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
    public function getFormat(){

        return 'json';

    }

    /**
     * @return string
     */
    public function getResource(){

        return 'statuses';

    }

}
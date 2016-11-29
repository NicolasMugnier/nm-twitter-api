<?php namespace Twitter\Api\Lists;

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
        return 'lists';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

}
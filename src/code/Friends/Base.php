<?php namespace Twitter\Api\Friends;

/**
 * Class Base
 * @package Twitter\Api\Friends
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
        return 'friends';
    }

    /**
     * @return string
     */
    public function getFormat(){
        return 'json';
    }

}
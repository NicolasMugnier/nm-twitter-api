<?php namespace Twitter\Api\Lists;

class GetShow extends Base {

    function getOperation()
    {
        return 'show';
    }

    function getHttpMethod()
    {
        return 'GET';
    }

}
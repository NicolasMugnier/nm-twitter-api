<?php namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscribers extends Base {

    function getOperation()
    {
        return 'subscribers';
    }

    function getHttpMethod()
    {
        return 'GET';
    }
}
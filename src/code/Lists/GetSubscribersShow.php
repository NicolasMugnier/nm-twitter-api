<?php namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscribersShow extends Base {

    function getOperation()
    {
        return 'subscribers/show';
    }

    function getHttpMethod()
    {
        return 'GET';
    }
}
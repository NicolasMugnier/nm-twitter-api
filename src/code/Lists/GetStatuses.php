<?php namespace NicolasMugnier\Twitter\Api\Lists;

class GetStatuses extends Base {


    function getOperation()
    {
        return 'statuses';
    }

    function getHttpMethod()
    {
        return 'GET';
    }
}
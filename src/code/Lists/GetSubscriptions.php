<?php namespace NicolasMugnier\Twitter\Api\Lists;

class GetSubscriptions extends Base {

    function getOperation()
    {
        return 'subscriptions';
    }

    function getHttpMethod()
    {
        return 'GET';
    }

}
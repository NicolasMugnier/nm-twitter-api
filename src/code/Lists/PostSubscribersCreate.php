<?php namespace NicolasMugnier\Twitter\Api\Lists;

class PostSubscribersCreate extends Base {

    function getOperation()
    {
        return 'subscribers/create';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
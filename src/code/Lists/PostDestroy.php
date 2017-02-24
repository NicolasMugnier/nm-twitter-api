<?php namespace NicolasMugnier\Twitter\Api\Lists;

class PostDestroy extends Base {

    function getOperation()
    {
        return 'destroy';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
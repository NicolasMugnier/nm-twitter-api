<?php namespace NicolasMugnier\Twitter\Api\Lists;

class PostUpdate extends Base {

    function getOperation()
    {
        return 'update';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
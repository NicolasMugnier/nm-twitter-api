<?php namespace NicolasMugnier\Twitter\Api\Lists;

class PostCreate extends Base {

    function getOperation()
    {
       return 'create';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
<?php namespace NicolasMugnier\Twitter\Api\Lists;

class PostMembersCreateAll extends Base {

    function getOperation()
    {
        return 'members/create_all';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
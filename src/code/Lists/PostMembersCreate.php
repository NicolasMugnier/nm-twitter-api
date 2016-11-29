<?php namespace Twitter\Api\Lists;

class PostMembersCreate extends Base {

    function getOperation()
    {
        return 'members/create';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
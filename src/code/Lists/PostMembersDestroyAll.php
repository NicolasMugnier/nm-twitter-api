<?php namespace Twitter\Api\Lists;

class PostMembersDestroyAll extends Base {

    function getOperation()
    {
        return 'members/destroy_all';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
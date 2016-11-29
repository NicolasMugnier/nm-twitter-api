<?php namespace Twitter\Api\Lists;

class PostMembersDestroy extends Base {

    function getOperation()
    {
        return 'members/destroy';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
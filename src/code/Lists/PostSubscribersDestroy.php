<?php namespace Twitter\Api\Lists;

class PostSubscribersDestroy extends Base {

    function getOperation()
    {
        return 'subscribers/destroy';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
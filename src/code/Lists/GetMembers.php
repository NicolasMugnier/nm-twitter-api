<?php namespace Twitter\Api\Lists;

class GetMembers extends Base {

    public function getOperation()
    {
        return 'members';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

}
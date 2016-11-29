<?php namespace Twitter\Api\Lists;

class GetMembersShow extends Base {

    public function getOperation()
    {
        return 'members/show';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

}
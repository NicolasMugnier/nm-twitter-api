<?php namespace Twitter\Api\Lists;

class GetMemberships extends Base {

    public function getOperation()
    {
        return 'memberships';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

}
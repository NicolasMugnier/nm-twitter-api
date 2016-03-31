<?php namespace Twitter\Api\Collections;

class PostDestroy extends Base {

    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    function getOperation()
    {
        return 'destroy';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
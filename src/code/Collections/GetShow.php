<?php namespace Twitter\Api\Collections;

class GetShow extends Base {

    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    public function getOperation(){
        return 'show';
    }

    public function getHttpMethod(){
        return 'GET';
    }

}
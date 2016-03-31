<?php namespace Twitter\Api\Collections;

class PostCreate extends Base {

    public function setName($name){
        $this->query['name'] = $name;
        return $this;
    }

    public function setDescription($description){
        $this->query['description'] = $description;
        return $this;
    }

    public function setUrl($url){
        $this->query['url'] = $url;
        return $this;
    }

    public function setTimelineOrder($timelineOrder){
        $this->query['timeline_order'] = $timelineOrder;
        return $this;
    }

    function getOperation()
    {
        return 'create';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
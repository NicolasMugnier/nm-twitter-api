<?php namespace Twitter\Api\Collections;

class PostEntriesAdd extends Base {

    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    public function setTweetId($tweetId){
        $this->query['tweet_id'] = $tweetId;
        return $this;
    }

    public function setRelativeTo($relativeTo){
        $this->query['relative_to'] = $relativeTo;
        return $this;
    }

    public function setAbove($above){
        $this->query['above'] = $above;
        return $this;
    }

    function getOperation()
    {
        return 'entries/add';
    }

    function getHttpMethod()
    {
        return 'POST';
    }
}
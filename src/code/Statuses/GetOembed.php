<?php namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * Class PostOembed
 * @package NicolasMugnier\Twitter\Api\Statuses
 * @link https://dev.twitter.com/rest/reference/get/statuses/oembed
 */
class PostOembed extends Base {

    /**
     * @param $id
     * @return $this
     */
    public function setId($id){
        $this->query['id'] = $id;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url){
        $this->query['url'] = $url;
        return $this;
    }

    /**
     * @param $maxWidth
     * @return $this
     */
    public function setMaxWidth($maxWidth){
        $this->query['maxwidth'] = $maxWidth;
        return $this;
    }

    /**
     * @param $hideMedia
     * @return $this
     */
    public function setHideMedia($hideMedia){
        $this->query['hide_media'] = $hideMedia;
        return $this;
    }

    /**
     * @param $hideThread
     * @return $this
     */
    public function setHideThread($hideThread){
        $this->query['hide_thread'] = $hideThread;
        return $this;
    }

    /**
     * @param $omitScript
     * @return $this
     */
    public function setOmitScript($omitScript){
        $this->query['omit_script'] = $omitScript;
        return $this;
    }

    /**
     * @param $align
     * @return $this
     */
    public function setAlign($align){
        $this->query['align'] = $align;
        return $this;
    }

    /**
     * @param $related
     * @return $this
     */
    public function setRelated($related){
        $this->query['related'] = $related;
        return $this;
    }

    /**
     * @param $lang
     * @return $this
     */
    public function setLang($lang){
        $this->query['lang'] = $lang;
        return $this;
    }

    /**
     * @param $widgetType
     * @return $this
     */
    public function setWidgetType($widgetType){
        $this->query['widget_type'] = $widgetType;
        return $this;
    }

    /**
     * @param $hideTweet
     * @return $this
     */
    public function setHideTweet($hideTweet){
        $this->query['hide_tweet'] = $hideTweet;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'oembed';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'GET';
    }
}
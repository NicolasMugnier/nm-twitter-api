<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Statuses;

/**
 * @link https://dev.twitter.com/rest/reference/get/statuses/oembed
 */
class PostOembed extends AbstractStatus
{
    public function setId(int $id): self
    {
        $this->query['id'] = $id;
        return $this;
    }

    public function setUrl(string $url): self
    {
        $this->query['url'] = $url;
        return $this;
    }

    public function setMaxWidth($maxWidth): self
    {
        $this->query['maxwidth'] = $maxWidth;
        return $this;
    }

    public function setHideMedia($hideMedia): self
    {
        $this->query['hide_media'] = $hideMedia;
        return $this;
    }

    public function setHideThread($hideThread): self
    {
        $this->query['hide_thread'] = $hideThread;
        return $this;
    }

    public function setOmitScript($omitScript): self
    {
        $this->query['omit_script'] = $omitScript;
        return $this;
    }

    public function setAlign($align): self
    {
        $this->query['align'] = $align;
        return $this;
    }

    public function setRelated($related): self
    {
        $this->query['related'] = $related;
        return $this;
    }

    public function setLang($lang): self
    {
        $this->query['lang'] = $lang;
        return $this;
    }

    public function setWidgetType($widgetType): self
    {
        $this->query['widget_type'] = $widgetType;
        return $this;
    }

    public function setHideTweet($hideTweet): self
    {
        $this->query['hide_tweet'] = $hideTweet;
        return $this;
    }

    public function getOperation(): string
    {
        return 'oembed';
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }
}

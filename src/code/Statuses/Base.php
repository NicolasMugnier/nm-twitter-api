<?php namespace Twitter\Api\Statuses;

abstract class Base extends \Twitter\Api\Request {

    const version = '1.1';

    const resource = 'statuses';

    const format = 'json';

    public function getUrl(){

        $url = $this->getBaseUrl();

        if(count($this->query) > 0){

            $tmp = [];
            foreach($this->query as $param => $value){
                $tmp[] = $param.'='.$value;
            }

            $url .= '?'.implode('&', $tmp);

        }

        return $url;

    }

    public function getBaseUrl(){

        return $url = self::baseUrl.'/'.self::version.'/'.self::resource.'/'.$this->getOperation().'.'.self::format;

    }

}
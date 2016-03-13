<?php namespace Twitter\Api;

interface RequestInterface {

    function getOperation();

    function getUrl();

    function getBaseUrl();

    function getHttpMethod();

    function execute();

}
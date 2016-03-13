<?php namespace Twitter\Api;

/**
 * Interface RequestInterface
 * @package Twitter\Api
 */
interface RequestInterface {

    function getOperation();

    function getUrl();

    function getBaseUrl();

    function getHttpMethod();

    function execute();

    function getVersion();

    function getFormat();

    function getResource();

}
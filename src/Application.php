#!/usr/bin/env php
<?php

require_once __DIR__.'/../vendor/autoload.php';

use \Symfony\Component\Console\Application;
use \Symfony\Component\DependencyInjection\ContainerBuilder;
use \Symfony\Component\Config\FileLocator;
use \Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

$container = new ContainerBuilder();
$loader = new PhpFileLoader($container, new FileLocator(__DIR__));
$loader->load('Services.php');

$application = new Application();
$application->add($container->get('friends_get_ids'));
$application->add($container->get('collections_get_list'));
$application->run();
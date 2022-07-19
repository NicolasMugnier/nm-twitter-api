<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\App;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Dotenv\Dotenv;

class Application
{
    private ContainerBuilder $container;

    public function getContainer(): ContainerBuilder
    {

        if (is_null($this->container)) {

            $dotenv = new Dotenv();
            $dotenv->load('./.env');
            $this->container = new ContainerBuilder();
            $loader = new YamlFileLoader($this->container, new FileLocator(__DIR__));
            $loader->load('config/services.yml');
            $this->container->compile();
        }

        return $this->container;
    }
}

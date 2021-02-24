<?php namespace NicolasMugnier\Twitter\App;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Dotenv\Dotenv;

/**
 * Class Application
 *
 * @package   NicolasMugnier\Twitter\App
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Application {

    /**
     * @var Symfony\Component\DependencyInjection\ContainerBuilder
     */
    private $container;

    /**
     * @return \NicolasMugnier\Twitter\App\Symfony\Component\DependencyInjection\ContainerBuilder|\Symfony\Component\DependencyInjection\ContainerBuilder
     */
    public function getContainer(){

        if(is_null($this->container)){

            $dotenv = new Dotenv();
            $dotenv->load('./.env');
            $this->container = new ContainerBuilder();
            $loader = new YamlFileLoader($this->container, new FileLocator(__DIR__));
            $loader->load('config/services.yml');

        }

        return $this->container;

    }

}
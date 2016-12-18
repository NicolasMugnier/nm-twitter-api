<?php namespace Twitter\Cmd;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class CollectionsGetList extends Command {

    protected $collectionsGetList;

    protected $settings;

    public function __construct(
        \Twitter\Api\Collections\GetList $collectionsGetList,
        $name = null
    ){
        parent::__construct($name);
        $this->collectionsGetList = $collectionsGetList;
    }

    protected function configure(){

        $this->setName('twitter:collections-getList');
        $this->setDescription('Twitter Collections GetList');
        $this->setHelp('Just run twitter:collections-getList');

    }

    public function getSetting($key){

        if(is_null($this->settings)){
            $this->settings = Yaml::Parse(file_get_contents(dirname(__FILE__).'/../settings/settings.yml'));
        }

        return (isset($this->settings[$key])) ? $this->settings[$key] : null;

    }

    protected function execute(InputInterface $input, OutputInterface $output){

        $this->collectionsGetList->setOAuthConsumerKey($this->getSetting('OAuthConsumerKey'))
            ->setOAuthConsumerSecret($this->getSetting('OAuthConsumerSecret'))
            ->setOAuthTokenSecret($this->getSetting('OAuthTokenSecret'))
            ->setOAuthToken($this->getSetting('OAuthToken'))
            ->setUserId('115008325');

        echo $this->collectionsGetList->execute();

    }

}
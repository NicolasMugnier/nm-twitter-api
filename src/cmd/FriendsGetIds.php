<?php namespace Twitter\Cmd;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class FriendsGetIds extends Command {

    protected $friendsGetIds;

    protected $settings;

    public function __construct(
        \Twitter\Api\Friends\GetIds $friendsGetIds,
        $name = null
    ){
        parent::__construct($name);
        $this->friendsGetIds = $friendsGetIds;
    }

    public function getSetting($key){

        if(is_null($this->settings)){
            $this->settings = Yaml::Parse(file_get_contents(dirname(__FILE__).'/../settings/settings.yml'));
        }

        return (isset($this->settings[$key])) ? $this->settings[$key] : null;

    }

    protected function configure(){

        $this->setName('twitter:friends-getIds');
        $this->setDescription('Twitter Friends GetIds');
        $this->setHelp('Just run twitter:friends-getIds');

    }

    protected function execute(InputInterface $input, OutputInterface $output){

        $this->friendsGetIds->setOAuthConsumerKey($this->getSetting('OAuthConsumerKey'))
            ->setOAuthConsumerSecret($this->getSetting('OAuthConsumerSecret'))
            ->setOAuthTokenSecret($this->getSetting('OAuthTokenSecret'))
            ->setOAuthToken($this->getSetting('OAuthToken'));

        echo $this->friendsGetIds->execute();

    }

}
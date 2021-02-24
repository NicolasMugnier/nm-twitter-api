<?php namespace NicolasMugnier\Twitter\Api\Stream;

class Stream {

    protected $status;

    protected $favorites;

    protected $directMessageEvent;

    protected $bearerToken;

    public function __construct(
        \NicolasMugnier\Twitter\Api\Statuses\PostRetweet $status,
        \NicolasMugnier\Twitter\Api\Favorites\PostCreate $favorites,
        \NicolasMugnier\Twitter\Api\DirectMessages\PostEventsNew $directMessageEvent
    ) {
        $this->status = $status;
        $this->favorites = $favorites;
        $this->directMessageEvent = $directMessageEvent;
        $this->bearerToken = $_ENV['BEARER_TOKEN'];
    }

    public function keepAlive($time = 10)
    {
        $this->directMessageEvent
            ->setType()
            ->setRecipientId($_ENV['ACCOUNT_ID'])
            ->setMessageData('Try to connect to stream ' . $time/10 .' attempt')
            ->execute();
        $this->open();
        sleep($time);
        $this->keepAlive($time*2);
    }

    public function open()
    {
        $sock = fsockopen("ssl://api.twitter.com", 443, $errno, $errstr, 30);
        if (!$sock) die("$errstr ($errno)\n");
        fwrite($sock, "GET /2/tweets/search/stream HTTP/1.0\r\nHost: api.twitter.com\r\nAccept: */*\r\nAuthorization: Bearer $this->bearerToken\r\n\r\n");
        while (!feof($sock)) {
            $message = fgets($sock, 4096);
            echo $message."\n";
            $message = json_decode($message);
            if (isset($message->data)) {
                $id = $message->data->id;
                $text = $message->data->text;
                $this->favorites->setId($id)->execute();
                $this->status->setId($id)->execute();
            }
        }
        fclose($sock);
        return $message;
    }

}
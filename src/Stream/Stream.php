<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\Stream;

use NicolasMugnier\Twitter\Api\Statuses\PostRetweet;
use NicolasMugnier\Twitter\Api\Favorites\PostCreate;
use NicolasMugnier\Twitter\Api\DirectMessages\PostEventsNew;

class Stream
{
    protected PostRetweet $status;

    protected PostCreate $favorites;

    protected PostEventsNew $directMessageEvent;

    protected string $bearerToken;

    public function __construct(
        PostRetweet $status,
        PostCreate $favorites,
        PostEventsNew $directMessageEvent,
        string $bearerToken
    ) {
        $this->status = $status;
        $this->favorites = $favorites;
        $this->directMessageEvent = $directMessageEvent;
        $this->bearerToken = $bearerToken;
    }

    public function keepAlive(int $time = 10): void
    {
        $this->directMessageEvent
            ->setType()
            ->setRecipientId((int) $_ENV['ACCOUNT_ID'])
            ->setMessageData('Try to connect to stream ' . $time / 10 . ' attempt')
            ->execute();
        $this->open();
        sleep($time);
        $this->keepAlive($time * 2);
    }

    public function open(): mixed
    {
        $sock = fsockopen("ssl://api.twitter.com", 443, $errno, $errstr, 30);
        if (!$sock) die("$errstr ($errno)\n");
        fwrite($sock, "GET /2/tweets/search/stream HTTP/1.0\r\nHost: api.twitter.com\r\nAccept: */*\r\nAuthorization: Bearer $this->bearerToken\r\n\r\n");
        $decodedMessage = '';
        while (!feof($sock)) {
            $message = (string) \fgets($sock, 4096);
            echo $message . "\n";
            /** @var \StdClass $decodedMessage */
            $decodedMessage = \json_decode($message);
            if (isset($decodedMessage->data)) {
                $id = $decodedMessage->data->id;
                $text = $decodedMessage->data->text;
                $this->favorites->setId($id)->execute();
                $this->status->setId($id)->execute();
            }
        }
        fclose($sock);
        return $decodedMessage;
    }
}

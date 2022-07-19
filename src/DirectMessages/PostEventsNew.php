<?php

declare(strict_types=1);

namespace NicolasMugnier\Twitter\Api\DirectMessages;

/**
 * @see https://developer.twitter.com/en/docs/twitter-api/v1/direct-messages/sending-and-receiving/api-reference/new-event
 */
class PostEventsNew extends AbstractDirectMessage
{

    public function setType(): self
    {
        $this->body['json']['event']['type'] = 'message_create';
        return $this;
    }

    public function setRecipientId(int $recipientId): self
    {
        $this->body['json']['event']['message_create']['target']['recipient_id'] = $recipientId;
        return $this;
    }

    public function setMessageData(string $messageData): self
    {
        $this->body['json']['event']['message_create']['message_data']['text'] = $messageData;
        return $this;
    }

    public function getOperation(): string
    {
        return 'events/new';
    }

    public function getHttpMethod(): string
    {
        return 'POST';
    }
}

<?php namespace NicolasMugnier\Twitter\Api\DirectMessages;

/**
 * Class GetIds
 *
 * @package   NicolasMugnier\Twitter\Api\DirectMessages
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @see       https://developer.twitter.com/en/docs/twitter-api/v1/direct-messages/sending-and-receiving/api-reference/new-event
 */
class PostEventsNew extends Base {

    public function setType()
    {
        $this->body['json']['event']['type'] = 'message_create';
        return $this;
    }

    /**
     * @param $recipientId
     * @return $this
     */
    public function setRecipientId($recipientId)
    {
        $this->body['json']['event']['message_create']['target']['recipient_id'] = $recipientId;
        return $this;
    }

    /**
     * @param $messageData
     * @return $this
     */
    public function setMessageData($messageData)
    {
        $this->body['json']['event']['message_create']['message_data']['text'] = $messageData;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return 'events/new';
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return 'POST';
    }
}
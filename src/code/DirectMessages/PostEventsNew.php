<?php namespace NicolasMugnier\Twitter\Api\DirectMessages;

/**
 * Class GetIds
 *
 * @package   NicolasMugnier\Twitter\Api\DirectMessages
 * @author    Nicolas Mugnier <mugnier.nicolas@gmail.com>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class PostEventsNew extends Base {

    /**
     * @param $recipientId
     * @return $this
     */
    public function setRecipientId($recipientId)
    {
        $this->query['target.recipient_id'] = $recipientId;
        return $this;
    }

    /**
     * @param $messageData
     * @return $this
     */
    public function setMessageData($messageData)
    {
        $this->query['message_data'] = $messageData;
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
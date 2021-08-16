<?php

namespace Delegation;

class AbstractMessenger implements MessengerInterface
{
    protected $sender;
    protected $recipient;
    protected $message;

    function setSender($sender)
    {
        $this->sender = $sender;
    }

    function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    function setMessage($message)
    {
        $this->message = $message;
    }

    function send()
    {
        return true;
    }
}

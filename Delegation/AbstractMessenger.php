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
        return $this;
    }

    function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    function send()
    {
        return true;
    }
}

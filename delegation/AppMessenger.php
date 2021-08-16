<?php

namespace Delegation;

class AppMessenger implements MessengerInterface
{
    private $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail()
    {
        $this->messenger = new EmailMessenger;
        return $this;
    }

    public function toSms()
    {
        $this->messenger = new SmsMessenger;
        return $this;
    }

    public function setSender($sender)
    {
        $this->messenger->setSender($sender);
        return $this;
    }

    public function setRecipient($recipient)
    {
        $this->messenger->setRecipient($recipient);
        return $this;
    }

    public function setMessage($message)
    {
        $this->messenger->setMessage($message);
        return $this;
    }

    public function send()
    {
        $this->messenger->send();
    }
}

<?php

namespace StaticFactory;

use Delegation\AppMessenger;
use Delegation\MessengerInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build($type = 'email'): MessengerInterface
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = 'test@mail.ru';
                break;

            case 'sms':
                $messenger->toSms();
                $sender = '+79815573982';
                break;

            default:
                throw new \Exception("Unknown type [$type]");
        }

        $messenger->setSender($sender)
                  ->setMessage('Test message');

        return $messenger;
    }
}
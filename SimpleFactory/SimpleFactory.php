<?php

namespace SimpleFactory;

use Delegation\AppMessenger;
use Delegation\EmailMessenger;
use Delegation\MessengerInterface;
use Delegation\SmsMessenger;

class SimpleFactory implements MessengerSimpleFactoryInterface
{
    public function build($type): MessengerInterface
    {
        switch ($type) {
            case 'email':
                $messenger = new EmailMessenger();
                $messenger->setSender('test@mail.ru')
                          ->setMessage('Test email message');
                break;

            case 'sms':
                $messenger = new SmsMessenger();
                $messenger->setSender('+79815573982')
                    ->setMessage('Test sms message');
                break;

            default:
                throw new \Exception("Unknown type [$type]");
        }

        return $messenger;
    }
}
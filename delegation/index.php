<?php

require_once ('../vendor/autoload.php');

use Delegation\AppMessenger;

$appMessenger = new AppMessenger();
$appMessenger->setSender('sender@mail.ru')
             ->setRecipient('recipient@mail.ru')
             ->setMessage('Test message')
             ->send();

$appMessenger->toSms()
             ->setSender('89115683219')
             ->setRecipient('89217562210')
             ->setMessage('Test message')
             ->send();

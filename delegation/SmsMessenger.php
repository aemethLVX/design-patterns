<?php

namespace Delegation;

class SmsMessenger extends AbstractMessenger
{
    function send()
    {
        echo __METHOD__;
        return parent::send();
    }
}

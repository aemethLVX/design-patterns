<?php

namespace Delegation;

class EmailMessenger extends AbstractMessenger
{
    function send()
    {
        echo __METHOD__;
        return parent::send();
    }
}

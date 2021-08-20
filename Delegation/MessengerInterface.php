<?php

namespace Delegation;

interface MessengerInterface
{
    function setSender($sender);
    function setRecipient($recipient);
    function setMessage($message);
    function send();
}

<?php

namespace SimpleFactory;

use Delegation\MessengerInterface;

interface MessengerSimpleFactoryInterface
{
    public function build($type): MessengerInterface;
}
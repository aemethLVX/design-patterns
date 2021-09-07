<?php

namespace StaticFactory;

use Delegation\MessengerInterface;

interface MessengerStaticFactoryInterface
{
    public static function build($type): MessengerInterface;
}
<?php

namespace EventChannel;

interface SubscriberInterface
{
    public function getName();

    public function notify($topic, $data);
}
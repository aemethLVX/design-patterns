<?php

namespace EventChannel;

interface EventChannelInterface
{
    public function subscribe($topic, SubscriberInterface $subscriber);

    public function publish($topic, $data);
}
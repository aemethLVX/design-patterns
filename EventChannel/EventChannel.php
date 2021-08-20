<?php

namespace EventChannel;

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function subscribe($topic, SubscriberInterface $subscriber): void
    {
        $this->topics[$topic][] = $subscriber;
        echo "{$subscriber->getName()} subscribed for $topic <br>";
    }

    public function publish($topic, $data)
    {
        if (empty($this->topics)) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($topic, $data);
        }
    }
}
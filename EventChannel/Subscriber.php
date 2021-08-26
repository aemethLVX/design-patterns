<?php

namespace EventChannel;

class Subscriber implements SubscriberInterface
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function notify($topic, $data)
    {
        echo "{$this->getName()} got a new release of '{$topic}' called '{$data}' <br>";
    }
}
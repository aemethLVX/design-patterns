<?php

namespace AbstractFactory;

class ButtonBootstrap implements ButtonInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
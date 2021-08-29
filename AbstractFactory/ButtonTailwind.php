<?php

namespace AbstractFactory;

class ButtonTailwind implements ButtonInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
<?php

namespace Decorator;

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return 'ConcreteComponent';
    }
}
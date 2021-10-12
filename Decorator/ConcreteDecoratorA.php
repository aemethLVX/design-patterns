<?php

namespace Decorator;

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return 'ConcreteDecoratorA(' . parent::operation() . ')';
    }
}

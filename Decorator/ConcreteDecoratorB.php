<?php

namespace Decorator;

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return 'ConcreteDecoratorB(' . parent::operation() . ')';
    }
}

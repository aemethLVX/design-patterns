<?php

namespace AbstractFactory;

class CheckboxBootstrap implements CheckBoxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
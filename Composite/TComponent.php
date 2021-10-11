<?php

namespace Composite;

trait TComponent
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function display()
    {
        echo "{$this->name} <br>" . PHP_EOL;
    }
}
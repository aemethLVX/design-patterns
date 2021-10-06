<?php

namespace Facade;

class SaveOrderAbstract
{
    protected $order;

    protected $data;

    public function __construct(Order $order, array $data)
    {
        $this->order = $order;
        $this->data = $data;
    }

    public function run()
    {
        echo static::class, '<br>';
    }
}
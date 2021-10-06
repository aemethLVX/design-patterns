<?php

namespace Facade;

class OrderSaveFacade
{
    public function save(Order $order, array $data)
    {
        (new OrderSaveProducts($order, $data))->run();
        (new OrderSaveDates($order, $data))->run();
        $order->save();
    }
}
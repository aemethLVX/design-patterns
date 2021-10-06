<?php

require_once ('../vendor/autoload.php');

use Facade\{Order, OrderSaveFacade};

$order = new Order();
$data = [];
(new OrderSaveFacade())->save($order, $data);

<?php

require_once ('../vendor/autoload.php');

use Strategy\Context;

$context = new Context(new \Strategy\StrategySort());
$context->doSomeBusinessLogic();
echo '<br>';
$context->setStrategy(new \Strategy\StrategyRSort);
$context->doSomeBusinessLogic();

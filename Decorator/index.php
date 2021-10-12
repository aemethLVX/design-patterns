<?php

require_once ('../vendor/autoload.php');

use Decorator\{ConcreteComponent, ConcreteDecoratorA, ConcreteDecoratorB};

$simple = new ConcreteComponent();
echo "Client: I've got a simple component: <br>";
echo "Result: " . $simple->operation(), "<br><br>";

$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);

echo "Client: Now I've got a decorated component: <br>";
echo "Result: " . $decorator2->operation();

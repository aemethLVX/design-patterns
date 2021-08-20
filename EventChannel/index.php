<?php

require_once ('../vendor/autoload.php');

use EventChannel\{EventChannel, Subscriber, Publisher};

$eventChannel = new EventChannel();

$malekith = new Subscriber('Malekith');
$morathi = new Subscriber('Morathi');
$tyrion = new Subscriber('Tyrion');

$highElves = new Publisher('high-elves', $eventChannel);
$darkElves = new Publisher('dark-elves', $eventChannel);

$eventChannel->subscribe('high-elves', $tyrion);
$eventChannel->subscribe('high-elves', $morathi);
$eventChannel->subscribe('dark-elves', $morathi);
$eventChannel->subscribe('dark-elves', $malekith);

$highElves->publish('News for High Elves');
$darkElves->publish('News for Dark Elves');
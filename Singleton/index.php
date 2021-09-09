<?php

require_once ('../vendor/autoload.php');

use \Singleton\Singleton;

$firstSingleton = Singleton::getInstance();
$secondSingleton = Singleton::getInstance();

var_dump($firstSingleton);
var_dump($secondSingleton);

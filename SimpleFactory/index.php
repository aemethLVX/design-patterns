<?php

require_once ('../vendor/autoload.php');

$simpleFactory = new \SimpleFactory\SimpleFactory();
$simpleFactory->build('sms')->send();

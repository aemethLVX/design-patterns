<?php

require_once ('../vendor/autoload.php');

use StaticFactory\StaticFactory;

$appMailMessenger = \StaticFactory\StaticFactory::build();
$appPhoneMessenger = \StaticFactory\StaticFactory::build('sms');

echo '<pre>'.print_r($appMailMessenger, true).'</pre>';
echo '<pre>'.print_r($appPhoneMessenger, true).'</pre>';

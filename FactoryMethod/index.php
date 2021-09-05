<?php

require_once ('../vendor/autoload.php');

$dialogForm = new \FactoryMethod\BootstrapDialogForm();
$result = $dialogForm->render();

var_dump($result);

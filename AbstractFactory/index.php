<?php

require_once ('../vendor/autoload.php');

use AbstractFactory\GuiKitFactory;

$guiKitFactory = (new GuiKitFactory())->getFactory('tailwind');

echo $guiKitFactory->buildButton()->draw();
echo $guiKitFactory->buildCheckBox()->draw();
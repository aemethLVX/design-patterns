<?php

namespace FactoryMethod;

use AbstractFactory\GuiFactoryInterface;

abstract class AbstractForm implements FormInterface
{
    public function render()
    {
        $gitKit = $this->createGuiKit();
        $result[] = $gitKit->buildButton()->draw();
        $result[] = $gitKit->buildCheckBox()->draw();

        return $result;
    }

    abstract function createGuiKit(): GuiFactoryInterface;
}
<?php

namespace FactoryMethod;

use AbstractFactory\BootstrapFactory;
use AbstractFactory\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}
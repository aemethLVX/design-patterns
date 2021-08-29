<?php

namespace AbstractFactory;

class BootstrapFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckboxBootstrap();
    }
}
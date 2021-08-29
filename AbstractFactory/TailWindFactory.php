<?php

namespace AbstractFactory;

class TailWindFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonTailwind();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckboxTailwind();
    }
}
<?php

namespace AbstractFactory;

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'tailwind':
                $factory = new TailWindFactory();
                break;
            default:
                throw new \Exception("Unknown factory type [$type]");
        }
        return $factory;
    }
}
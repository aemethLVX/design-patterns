<?php

require('PropertyContainerInterface.php');

class PropertyContainer implements PropertyContainerInterface
{
    private $container = [];

    function addProperty($name, $value)
    {
        $this->container[$name] = $value;
    }

    function deleteProperty($name)
    {
        unset($this->container[$name]);
    }

    function getProperty($name)
    {
        return $this->container[$name] ?? null;
    }

    function updateProperty($name, $value)
    {
        if (!$this->container[$name]) {
            throw new \Exception("Property {$name} not found");
        }

        $this->container[$name] = $value;
    }

    function getAllProperties()
    {
        return $this->container;
    }
}
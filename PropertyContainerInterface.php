<?php

interface PropertyContainerInterface
{
    function addProperty($name, $value);
    function deleteProperty($name);
    function getProperty($name);
    function updateProperty($name, $value);
}
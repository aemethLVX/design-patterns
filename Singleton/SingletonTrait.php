<?php

namespace Singleton;

trait SingletonTrait
{
    private static $instance;

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }
}
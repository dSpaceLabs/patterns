<?php

namespace Dspacelabs\Pattern;

/**
 */
abstract class Singleton implements SingletonInterface
{
    /**
     * @var self
     */
    private static $instance;

    /**
     */
    protected function __construct()
    {
    }

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     */
    protected function __clone()
    {
    }

    /**
     */
    protected function __wakeup()
    {
    }
}

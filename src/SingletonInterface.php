<?php

namespace Dspacelabs\Pattern;

/**
 */
interface SingletonInterface
{
    /**
     * @return self
     */
    public static function getInstance();
}

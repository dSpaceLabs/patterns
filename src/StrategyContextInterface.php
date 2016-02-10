<?php

namespace Dspacelabs\Pattern;

/**
 */
interface StrategyContextInterface
{
    /**
     * @param StrategyInterface $strategy
     */
    public function setStrategy(StrategyInterface $strategy);
}

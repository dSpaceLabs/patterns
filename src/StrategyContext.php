<?php

namespace Dspacelabs\Pattern;

/**
 */
abstract class StrategyContext implements StrategyContextInterface
{
    /**
     * @var StrategyInterface
     */
    protected $strategy;

    /**
     * @param StrategyInterface $strategy
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return StrategyInterface
     */
    public function getStrategy()
    {
        return $this->strategy;
    }
}

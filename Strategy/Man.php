<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @author      Stefan Schwager
 */

namespace Pattern\Strategy;

abstract class Man extends Human implements ApproachStrategyInterface
{
    /**
     * @var ApproachStrategyInterface
     */
    protected $approachStrategy;

    public function __construct()
    {
        $this->setDefaultApproachStrategy();
    }

    /**
     * @return mixed
     */
    public function approachABeautifulWoman()
    {
        return $this->approachStrategy->approachABeautifulWoman();
    }

    /**
     * @param ApproachStrategyInterface $approachStrategy
     */
    public function setApproachStrategy(ApproachStrategyInterface $approachStrategy)
    {
        $this->approachStrategy = $approachStrategy;
    }

    private function setDefaultApproachStrategy()
    {
        $this->setApproachStrategy(new MachoApproach());
    }
}

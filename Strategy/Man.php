<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @author      Stefan Schwager
 */

namespace Pattern\Strategy;

abstract class Man extends Human
{
    /**
     * @var ApproachStrategyInterface
     */
    protected $approachStrategy;

    public function __constructor()
    {
        $this->setDefaultApproachStrategy();
    }

    public function approachABeautifulWoman()
    {
        return $this->approachStrategy->approachABeautifulWoman();
    }

    public function setApproachStrategy(ApproachStrategyInterface $approachStrategy)
    {
        $this->approachStrategy = $approachStrategy;
    }

    private function setDefaultApproachStrategy()
    {
        $this->setApproachStrategy(new MachoApproach());
    }
}
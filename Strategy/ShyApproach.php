<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @author      Stefan Schwager
 */
namespace Pattern\Strategy;

class ShyApproach implements ApproachStrategyInterface
{
    /**
     * @return string
     */
    public function approachABeautifulWoman()
    {
        return "mmhhh ahhhh hhaa .. i find you aehmm aahhmm sweet..ahmm.";
    }
}

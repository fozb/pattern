<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @author      Stefan Schwager
 */

namespace Pattern\State;

interface StudentStateInterface
{
    public function spendBeer();
    public function spendCocaine();
    public function spendCannabis();
    public function spendWater();
}

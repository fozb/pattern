<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @subpackage  Person
 * @author      Stefan Schwager
 */

namespace Pattern\Strategy\Person;

use Pattern\Strategy\Man;
use Pattern\Strategy\ShyApproach;

class Stefan extends Man
{
    public function __construct()
    {
        $this->setApproachStrategy(new ShyApproach());
    }
}
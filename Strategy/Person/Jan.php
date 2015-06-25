<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @subpackage  Person
 * @author      Stefan Schwager
 */

namespace Pattern\Strategy\Person;

use Pattern\Strategy\MachoApproach;
use Pattern\Strategy\Man;

class Jan extends Man
{
    public function __construct()
    {
        $this->setApproachStrategy(new MachoApproach());
    }
}
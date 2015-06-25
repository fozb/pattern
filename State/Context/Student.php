<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  Context
 * @author      Stefan Schwager
 */

namespace Pattern\State\Context;

use Pattern\State\StudentStateInterface;

class Student
{
    /**
     * @var StudentStateInterface
     */
    public $state;

    public function __construct()
    {
        $this->state = new Shy();
    }

    public function spendBeer()
    {
        $this->state->spendBeer();
    }

    public function spendCannabis()
    {
        $this->state->spendCannabis();
    }

    public function spendWater()
    {
        $this->state->spendWater();
    }

    public function setCurrentState(StudentStateInterface $state)
    {
        $this->state = $state;
    }
}

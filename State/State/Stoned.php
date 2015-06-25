<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  State
 * @author      Stefan Schwager
 */

namespace Pattern\State\Context;

use Pattern\State\StudentStateInterface;

class Stoned implements StudentStateInterface
{
    /**
     * @var Student
     */
    private $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function spendBeer()
    {
        echo 'Give me something to eat and not a beer.';
        $this->student->setCurrentState($this);
    }

    public function spendCannabis()
    {
        echo 'Yes give me more pot';
        $this->student->setCurrentState(new Crash($this->student));
    }

    public function spendWater()
    {
        echo 'Thanks, I have a dry mouth';
        $this->student->setCurrentState($this);
    }
}

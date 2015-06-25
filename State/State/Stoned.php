<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  State
 * @author      Stefan Schwager
 */

namespace Pattern\State\State;

use Pattern\State\Context\Student;
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
        echo 'Give me something to eat and not a beer.' . "\n";
        $this->student->setCurrentState($this);
    }

    public function spendCannabis()
    {
        echo 'Yes give me more pot' . "\n";
        $this->student->setCurrentState(new Crash($this->student));
    }

    public function spendWater()
    {
        echo 'Thanks for the water, I have a dry mouth' . "\n";
        $this->student->setCurrentState($this);
    }
}

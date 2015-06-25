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

class Drunken implements StudentStateInterface
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
        echo 'Ok, but that\'s the last beer ;D' . "\n";
        $this->student->setCurrentState($this);
    }

    public function spendCannabis()
    {
        echo 'Givee...ee mmmm...mmme that shit' . "\n";
        $this->student->setCurrentState(new Crash($this->student));
    }

    public function spendWater()
    {
        echo 'Yes vodka! WTF that is water' . "\n";
        $this->student->setCurrentState($this);
    }
}

<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  State
 * @author      Stefan Schwager
 */

namespace Pattern\State\State;

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
        echo 'Ok, but that\'s the last one ;D';
        $this->student->setCurrentState($this);
    }

    public function spendCannabis()
    {
        echo 'Giveeee mmme that shit';
        $this->student->setCurrentState(new Crash($this->student));
    }

    public function spendWater()
    {
        echo 'Yes vodka! WTF that is water';
        $this->student->setCurrentState($this);
    }
}

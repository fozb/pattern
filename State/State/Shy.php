<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  State
 * @author      Stefan Schwager
 */

namespace Pattern\State\Context;

use Pattern\State\StudentStateInterface;

class Shy implements StudentStateInterface
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
        echo 'Yes, give me more!';
        $this->student->setCurrentState(new Drunken($this->student));
    }

    public function spendCannabis()
    {
        echo 'Year, Peace my friend';
        $this->student->setCurrentState(new Stoned($this->student));
    }

    public function spendWater()
    {
        echo 'Pfff, give me a beer!';
        $this->student->setCurrentState($this);
    }
}

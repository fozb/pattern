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
        echo 'Yes, give me more beer!' . "\n";
        $this->student->setCurrentState(new Drunken($this->student));
    }

    public function spendCannabis()
    {
        echo 'Year, Peace my friend' . "\n";
        $this->student->setCurrentState(new Stoned($this->student));
    }

    public function spendWater()
    {
        echo 'Pfff, give me a beer not water!' . "\n";
        $this->student->setCurrentState($this);
    }
}

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

class Crash implements StudentStateInterface
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
        echo 'Beer?? Go Away!' . "\n";
        $this->student->setCurrentState($this);
    }

    public function spendCannabis()
    {
        echo 'Cannabis?? Go Away!' . "\n";
        $this->student->setCurrentState($this);
    }

    public function spendWater()
    {
        echo 'Thanks for the water!' . "\n";
        $this->student->setCurrentState($this);
    }
}

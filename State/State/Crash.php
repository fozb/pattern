<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  State
 * @author      Stefan Schwager
 */

namespace Pattern\State\State;

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
        echo 'Beer?? Go Away!';
        $this->student->setCurrentState($this);
    }

    public function spendCannabis()
    {
        echo 'Cannabis?? Go Away!';
        $this->student->setCurrentState($this);
    }

    public function spendWater()
    {
        echo 'Thanks!';
        $this->student->setCurrentState($this);
    }
}

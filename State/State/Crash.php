<?php
/**
 * @category    Pattern
 * @package     State
 * @subpackage  State
 * @author      Stefan Schwager
 */

namespace Pattern\State\Context;

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
    }

    public function spendCannabis()
    {
    }

    public function spendWater()
    {
    }
}

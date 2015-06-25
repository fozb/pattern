<?php
/**
 * @category    Pattern
 * @package     State
 * @author      Stefan Schwager
 */
namespace Pattern\State;

use Pattern\State\Context\Student;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
    public function crashTheStudent()
    {
        $student = new Student();
        $student->spendBeer();
        $student->spendCannabis();
        $student->spendBeer();
        $student->spendWater();
    }
}

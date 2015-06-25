<?php
/**
 * @category    Pattern
 * @package     Strategy
 * @author      Stefan Schwager
 */
namespace Pattern\Strategy;

use Pattern\Strategy\Person\Jan;
use Pattern\Strategy\Person\Mathias;
use Pattern\Strategy\Person\Stefan;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
    public function shyApproach()
    {
        $stefanTryToFlirt = new Stefan();
        echo $stefanTryToFlirt->approachABeautifulWoman() . "\n";
    }

    public function fromShyToMachoApproach()
    {
        $stefanTryToFlirt = new Stefan();
        $stefanTryToFlirt->setApproachStrategy(new MachoApproach());
        echo $stefanTryToFlirt->approachABeautifulWoman() . "\n";
    }

    public function stonedApproach()
    {
        $mathiasTryToFlirt = new Mathias();
        echo $mathiasTryToFlirt->approachABeautifulWoman() . "\n";
    }

    public function machoApproach()
    {
        $janTryToFlirt = new Jan();
        echo $janTryToFlirt->approachABeautifulWoman() . "\n";
    }
}

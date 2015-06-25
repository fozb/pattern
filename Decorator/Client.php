<?php
/**
 * @category    Pattern
 * @package     Decorator
 * @author      Stefan Schwager
 */
namespace Pattern\Decorator;

use Pattern\Decorator\Developer\PhpDeveloper;
use Pattern\Decorator\Skill\OopSkill;
use Pattern\Decorator\Skill\RubySkill;
use Pattern\Decorator\Skill\ZendFrameworkSkill;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
    public function allRoundDeveloper()
    {
        $developer = new PhpDeveloper();
        $oopSkills = new OopSkill($developer);
        $oopWithRubySkills = new RubySkill($oopSkills);
        $oopWithRubySkillsZf = new ZendFrameworkSkill($oopWithRubySkills);
        echo $oopWithRubySkillsZf->getPrice() . "\n";
        echo $oopWithRubySkillsZf->getDescription() . "\n";
    }
}

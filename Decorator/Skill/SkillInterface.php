<?php
/**
 * @category    Pattern
 * @package     Decorator
 * @author      Stefan Schwager
 */

namespace Pattern\Decorator\Skill;

use Pattern\Decorator\Developer\DeveloperInterface;

interface SkillInterface extends DeveloperInterface
{

    public function getPrice();

    public function getDescription();

}

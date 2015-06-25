<?php
/**
 * @category    Pattern
 * @package     Decorator
 * @author      Stefan Schwager
 */

namespace Pattern\Decorator\Skill;

use Pattern\Decorator\Developer\DeveloperInterface;

class ZendFrameworkSkill implements SkillInterface
{
    /**
     * @var DeveloperInterface
     */
    protected $developer;

    public function __construct(DeveloperInterface $developer)
    {
        $this->developer = $developer;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->developer->getPrice() * 1.14;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->developer->getDescription() . ' , Zend-Framework';
    }
}


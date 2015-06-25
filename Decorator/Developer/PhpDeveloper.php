<?php
/**
 * @category    Pattern
 * @package     Decorator
 * @author      Stefan Schwager
 */

namespace Pattern\Decorator\Developer;

class PhpDeveloper implements DeveloperInterface
{
    /**
     * @return int
     */
    public function getPrice()
    {
        return 100000;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'PHP-Developer';
    }
}

<?php

namespace Pattern\Composite\Leaf;

use Pattern\Composite\Component\FileComponent;

class File extends FileComponent
{
    public function __construct($name)
    {
        $this->setName($name);
        $this->setCount(1);
    }
}

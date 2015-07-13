<?php

namespace Pattern\Composite\Composite;

use Pattern\Composite\Component\FileComponent;

class Directory extends FileComponent
{
    private $childComponents;

    public function __construct($name)
    {
        $this->setName($name);
        $this->childComponents = [];
    }

    public function add(FileComponent $childComponents)
    {
        $objectHash = $this->getObjectHash($childComponents);
        $this->childComponents[$objectHash] = $childComponents;
    }

    public function remove(FileComponent $childComponents)
    {
        $objectHash = $this->getObjectHash($childComponents);
        unset($this->childComponents[$objectHash]);
    }

    public function getCount()
    {
        $count = 1;
        foreach ($this->childComponents as $child) {
            $count += $child->getCount();
        }
        return $count;
    }

    private function getObjectHash(FileComponent $childComponents)
    {
        return spl_object_hash($childComponents);
    }
}

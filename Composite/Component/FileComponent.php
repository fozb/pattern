<?php

namespace Pattern\Composite\Component;

abstract class FileComponent
{
    private $name;
    private $count;
    private $fileComponent;

    public function add(FileComponent $fileComponent)
    {
        return null;
    }

    public function remove(FileComponent $fileComponent)
    {
        return null;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }
}

<?php

namespace Pattern\Composite;

use Pattern\Composite\Composite\Directory;
use Pattern\Composite\Leaf\File;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
    public function testGetCount()
    {
        $directory = new Directory('my-directory');
        $file = new File('my-file.pdf');
        $directory->add($file);
        $file = new File('my-file2.pdf');
        $directory->add($file);


        $subDirectory = new Directory('my-directory');
        $file = new File('my-file.pdf');
        $directory->add($file);
        $file = new File('my-file2.pdf');
        $directory->add($file);

        $directory->add($subDirectory);

        echo $directory->getCount();
    }
}

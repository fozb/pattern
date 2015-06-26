<?php
/**
 * @category    Pattern
 * @package     Composite
 * @author      Stefan Schwager
 */
namespace Pattern\Composite;

use Pattern\Composite\Composite\Directory;
use Pattern\Composite\Leaf\File;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
    public function directoryWithOneFile()
    {
        $directory = new Directory();
        $file = new File();
        $directory->add($file);
    }
}

<?php
/**
 * @category    Pattern
 * @package     Composite
 * @author      Stefan Schwager
 */
namespace Pattern\Composite;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
}

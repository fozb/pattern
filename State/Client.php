<?php
/**
 * @category    Pattern
 * @package     State
 * @author      Stefan Schwager
 */
namespace Pattern\State;

require_once './vendor/autoload.php';
$function = end($argv);
$client = new Client();
$client->{$function}();

class Client
{
}

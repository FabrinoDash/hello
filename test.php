<?php

// Load Composer's autoloader
require 'vendor/autoload.php';

// Import your class
use Fabrinotech\Hello\Hello;

// Use the class
$greeting = new Hello();
echo $greeting->sayHello('Fabrino') . PHP_EOL;
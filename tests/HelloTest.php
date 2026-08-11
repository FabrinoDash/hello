<?php

namespace Fabrinotech\Hello\Tests;

use PHPUnit\Framework\TestCase;
use Fabrinotech\Hello\Hello;

class HelloTest extends TestCase
{
    public function testItReturnsTheDefaultGreeting()
    {
        $greeting = new Hello();
        
        $this->assertEquals('Hello, World from FabrinoTech', $greeting->sayHello());
    }

    public function testItReturnsACustomGreeting()
    {
        $greeting = new Hello();
        
        $this->assertEquals('Hello, Fabrino from FabrinoTech', $greeting->sayHello('Fabrino'));
    }
}
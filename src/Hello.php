<?php 

namespace Fabrinotech\Hello;

class Hello 
{
    public function sayHello(string $name = 'World'): string 
    {
        return "Hello, {$name} from FabrinoTech";
    }
}
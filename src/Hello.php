<?php

namespace App;

class Hello
{
    public static function sayHello(string $name = "World"): string
    {
        return "Hello, " . $name . "!";
    }
    
    public static function sumArray(array $numbers): int
    {
        return array_sum($numbers);
    }
}

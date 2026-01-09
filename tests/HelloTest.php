<?php

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function testSayHello()
    {
        $this->assertEquals("Hello, World!", Hello::sayHello());
        $this->assertEquals("Hello, GitLab!", Hello::sayHello("GitLab"));
    }
    
    public function testSumArray()
    {
        $this->assertEquals(10, Hello::sumArray([1, 2, 3, 4]));
        $this->assertEquals(0, Hello::sumArray([]));
    }
}

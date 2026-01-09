<?php

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(4, 2 + 2);
    }
    
    public function testString()
    {
        $this->assertEquals('hello', strtolower('HELLO'));
    }
    
    public function testTrue()
    {
        $this->assertTrue(true);
    }
}

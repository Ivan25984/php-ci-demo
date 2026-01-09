<?php

use PHPUnit\Framework\TestCase;

class TestDemo extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }
    
    public function testMath()
    {
        $this->assertEquals(4, 2 + 2);
    }
    
    public function testString()
    {
        $this->assertStringContainsString('test', 'This is a test');
    }
}

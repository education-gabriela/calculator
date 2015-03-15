<?php
require 'vendor/autoload.php';

use Calculator\BinaryNode;
use Calculator\ValueNode;
use Calculator\IfNode;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testCalculatingOneValue()
    {
        $valueCalculator = new ValueNode(5);
        
        $this->assertEquals(5, $valueCalculator->calculate());
    }
 
    public function testMinus()
    {
        $valueCalculator = new BinaryNode(
            '-', 
            new ValueNode(2),
            new ValueNode(5)
        );
        
        $this->assertEquals(-3, $valueCalculator->calculate());        
    }
    
    public function testMinusWithNegativeOperand()
    {
        $valueCalculator = new BinaryNode(
            '-', 
            new ValueNode(3),
            new ValueNode(-1)
        );
        
        $this->assertEquals(4, $valueCalculator->calculate());
    }
    
    public function testSum()
    {
        $valueCalculator = new BinaryNode(
            '+', 
            new ValueNode(1),
            new ValueNode(1)
        );
        
        $this->assertEquals(2, $valueCalculator->calculate());        
    }
    
    public function testDivision()
    {
        $valueCalculator = new BinaryNode(
            '/',
            new ValueNode(15),
            new ValueNode(5)
        );

        $this->assertEquals(3, $valueCalculator->calculate());
    }
    
    public function testMultiplication()
    {
        $valueCalculator = new BinaryNode(
            '/',
            new ValueNode(15),
            new ValueNode(3)
        );

        $this->assertEquals(5, $valueCalculator->calculate());
    }
    
    public function testHigherThan()
    {
        $valueCalculator = new BinaryNode(
            '>',
            new ValueNode(7),
            new ValueNode(-1)
        );
        
        $this->assertTrue($valueCalculator->calculate());
    }
    
    public function testLessThan()
    {
        $valueCalculator = new BinaryNode(
            '<',
            new ValueNode(-5),
            new ValueNode(-3)
        );
        
        $this->assertTrue($valueCalculator->calculate());
    }
    
    public function testEquals()
    {
        $valueCalculator = new BinaryNode(
            '=',
            new ValueNode(4),
            new ValueNode(4)
        );
        
        $this->assertTrue($valueCalculator->calculate());        
    }
}

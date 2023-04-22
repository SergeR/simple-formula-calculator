<?php
/**
 * @author Serge Rodovnichenko <sergerod@gmail.com>
 * @copyright Serge Rodovnichenko, 2023
 * @license MIT
 */

use SergeR\SimpleFormula\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalc()
    {
        $this->assertEquals(0, Calculator::calc());
        $this->assertEquals(5, Calculator::calc('5'));
        $this->assertEquals(-5, Calculator::calc('-5'));
        $this->assertEquals(0, Calculator::calc('0'));
        $this->assertEquals(15, Calculator::calc('5+5+5'));
        $this->assertEquals(5, Calculator::calc('5+5-5'));
        $this->assertEquals(5, Calculator::calc('5-5+5'));
        $this->assertEquals(10, Calculator::calc('2*5'));
        $this->assertEquals(2, Calculator::calc('10/5'));
        $this->assertEquals(5, Calculator::calc('5+10%'));
        $this->assertEquals(5, Calculator::calc('5-10%'));
        $this->assertEquals(15, Calculator::calc('5+10%', 100));
        $this->assertEquals(5, Calculator::calc('15-10%', 100));
        $this->assertEquals(20, Calculator::calc('2*10%', 100));
        $this->assertEquals(60, Calculator::calc('10+5%+20%', 200));
    }

    public function testCalcDivisionByZeroException()
    {
        $this->expectException(DivisionByZeroError::class);
        $this->assertEquals(20, Calculator::calc('5/0', 100));
        $this->assertEquals(20, Calculator::calc('10-5/0', 100));
        $this->assertEquals(20, Calculator::calc('5/0%', 100));
    }
}

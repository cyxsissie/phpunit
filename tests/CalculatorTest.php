<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * CalculatorTest
 * @group calculator
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function testAdd()
    {
        //arrange(准备好测试)
        $target = new Calculator();
        $expected = 2;
        //act
        $actual = $target->add(1,1);
        //assert
        $this->assertEquals($expected,$actual);
    }

}

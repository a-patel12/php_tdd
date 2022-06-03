<?php

namespace Apatel\PhpTdd;

use PHPUnit\Framework\TestCase;
use http\Exception\InvalidArgumentException;

class CalculationTest extends TestCase
{

    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculation();
    }

    public function addDataProvider()
    {
        return [
            [1, 2, 3],
            [0, 0, 0],
            [-1, -1, -2],
            //['a',1,2], // this will trigger exception
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAddReturnsSumOfArguments($a, $b, $expected)
    {
        try {
            $result = $this->calculator->add($a, $b);
            $this->assertEquals($expected, $result);
        } catch (InvalidArgumentException $exception) {
            $this->fail('Message: ' . $exception->getMessage());
        }
    }

    public function multiplyDataProvider()
    {
        return [
            [3, 2, 6],
            [9, 1, 9],
            [-2, 4, -8],
            [702, 392, 275184],
            //['a',2, 2], // this will trigger exception
        ];
    }

    /**
     * @dataProvider multiplyDataProvider
     */
    public function testRecreateMultiplicationOfArguments($a, $b, $expected){
        try {
            $result = $this->calculator->recreateMultiplication($a, $b);
            $this->assertEquals($expected, $result);
        }catch(InvalidArgumentException $exception){
            $this->fail('Message: ' . $exception->getMessage());
        }

    }

}
<?php
namespace Apatel\PhpTdd;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{

    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function addDataProvider() {

        return [
            [1,2,3],
            [0,0,0],
            [-1,-1,-2],
        ];

    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);

    }

}
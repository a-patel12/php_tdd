<?php
namespace Apatel\PhpTdd;
use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{

    private $calculator;

    protected function setUp(): void{
        $this->calculator = new Calculator();
    }

    public function addDataProvider() {
        return [
            [1,2,3],
            [0,0,0],
            [-1,-1,-2],
           // ['a',1,2], // this will trigger exception
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected){
        try{
            $result = $this->calculator->add($a, $b);
            $this->assertEquals($expected, $result);
        }
        catch (Exception $exception){
            $this->fail('Message: ' .$exception->getMessage());
        }
    }

}
<?php
namespace Apatel\PhpTdd;
use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;

class ArrayMethodsTest extends TestCase{

    private $array_methods;

    protected function setUp(): void{
        $this->array_methods = new ArrayMethods();
    }

    public function sortingDataProvider() {
        return [
            [[0, 1, 0], 3, [0, 0, 1]],
            [[0, 2, 1, 0], 4, [0, 0, 1, 2]],
            [[2, 1, 0], 3, [0, 1, 2]],
            [[2, -1, 0], 3, false], // this will return false, because of -1
        ];
    }

    /**
     * @dataProvider sortingDataProvider
     */
    public function testReturnsSorted012($a, $b, $expected){

            $result = $this->array_methods->sort012($a, $b);
            $this->assertEqualsCanonicalizing($expected, $result);

    }

}
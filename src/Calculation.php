<?php

namespace Apatel\PhpTdd;

class Calculation{

    public function add($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new \InvalidArgumentException('Both arguments must be numbers or numeric strings');
            }
            return $a + $b;
        }
        catch(\InvalidArgumentException $exception) {
          return 'Error message: ' . $exception->getMessage();
        }

    }

    public function recreateMultiplication($a, $b){
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new \InvalidArgumentException('Both values must be numbers or numeric strings');
            }

            $get_numbers=array_fill(0, $b, $a);
            return array_sum($get_numbers);
        }
        catch(\InvalidArgumentException $exception) {
            return 'Error message: ' . $exception->getMessage();
        }

    }

}
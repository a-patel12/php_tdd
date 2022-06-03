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

            $number_to_add = ($a < 0) ? abs($a) : $a;
            $counts_for_number = ($b < 0) ? abs($b) : $b;

            $get_numbers=array_fill(0, $counts_for_number, $number_to_add);
            $multiplication = array_sum($get_numbers);

            if(($a < 0 && $b > 0) || ($a > 0 && $b < 0)){
                return (0 - $multiplication);
            }
            return $multiplication;
        }
        catch(\InvalidArgumentException $exception) {
            return 'Error message: ' . $exception->getMessage();
        }

    }

}
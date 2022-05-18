<?php

namespace Apatel\PhpTdd;

use PHPUnit\Util\Exception;

class Calculator{

    public function add($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new Exception('Both arguments must be numbers or numeric strings');
        }
        return $a + $b;
    }

}
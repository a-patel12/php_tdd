<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Apatel\PhpTdd\ArrayMethods;

$array_methods = new ArrayMethods();

// Provided an array of size N contains 0, 1, 2; sort the array in asc order.
$array_values = [0, 1, 2, 0, 1];
$N = 5;
$sorted_array012 = $array_methods->sort012($array_values, $N);
if ($sorted_array012) {
    print_r($sorted_array012);
} else {
    // we can add more specific error messages, by checking $N and $array_values before calling sort012()
    print "Invalid arguments/values";
}
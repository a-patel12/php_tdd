<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Apatel\PhpTdd\Calculation;
$data= [[2, 4],['a', 4],[0, 0], [0, -2], [-2, -6]];

$calculation = new Calculation();

foreach($data as $key => $args) {
    $sumOfArguments = $calculation->add($args[0], $args[1]);
    echo $args[0]." + ".$args[1]." = ".$sumOfArguments . PHP_EOL;

    $recreationOfMultiplication = $calculation->recreateMultiplication($args[0], $args[1]);
    echo $args[0]." * ".$args[1]." = ". $recreationOfMultiplication . PHP_EOL;
}
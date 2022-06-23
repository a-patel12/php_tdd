<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Apatel\PhpTdd\StringMethods;

/**
 * Converts provided names to short name using first char of each name
 */
$string_methods = new StringMethods();
$names = ['Test', 'Abc','xyz'];
$society_name = $string_methods->societyName($names);
print $society_name;

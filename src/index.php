<?php

require __DIR__ . '/autoload.php';

use App\Helpers\StringHelper;

$len = StringHelper::length('OOP is awesome!');

var_dump($len);

StringHelper::registerMacros('toUpper', function ($str) {
    return \strtoupper($str);
});

$result = StringHelper::toUpper('this is string in lower case');
var_dump($result);



<?php

require __DIR__ . '/autoload.php';

use App\Helpers\StringHelper;

$len = StringHelper::length('OOP is awesome!');

var_dump($len);
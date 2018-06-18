<?php

require_once __DIR__ . '/GzipCompressor.php';
require_once __DIR__ . '/InMemoryDataStorage.php';

$compressor = new GzipCompressor();
$storage = new InMemoryDataStorage($compressor);

$storage->create('password', 'qwerty');
var_dump($storage->get('password'));


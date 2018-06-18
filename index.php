<?php

require __DIR__ . '/InMemoryDataStorage.php';
require __DIR__ . '/NotImplementedException.php';

$storage = new InMemoryDataStorage();

$storage->create('login', 'vasya556');
$storage->create('email', 'user@example.com');
$storage->create('dataDir', './data');

try {
    var_dump($storage->get('login'));
} catch (NotImplementedException $e) {
    //
} finally {

}

$storage->delete('login');

var_dump($storage->get('login'));

$storage->clear();

var_dump($storage->get('email'));

<?php

require __DIR__ . '/InMemoryDataStorage.php';

$storage = new InMemoryDataStorage();

$storage->create('login', 'vasya556');
$storage->create('email', 'user@example.com');
$storage->create('dataDir', './data');

var_dump($storage->get('login'));

$storage->delete('login');

var_dump($storage->get('login'));

$storage->clear();

var_dump($storage->get('email'));

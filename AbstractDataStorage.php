<?php

require __DIR__ . '/DataStorageInterface.php';

abstract class AbstractDataStorage implements DataStorageInterface
{
    abstract public function create($key, $item);

    abstract public function delete($key);

    public function get($key)
    {
        return $key;
    }
}

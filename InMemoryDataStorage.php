<?php

require __DIR__ . '/AbstractDataStorage.php';
require __DIR__ . '/ClearStorageInterface.php';

class InMemoryDataStorage extends AbstractDataStorage implements ClearStorageInterface
{
    private $storage = [];

    public function create($key, $item)
    {
        $this->storage[$key] = $item;
    }

    public function delete($key)
    {
        if (isset($this->storage[$key])) {
            unset($this->storage[$key]);
        }
    }

//    public function get($key)
//    {
//        if (isset($this->storage[$key])) {
//            return $this->storage[$key];
//        }
//
//        return null;
//    }

    public function clear()
    {
        $this->storage = [];
    }
}

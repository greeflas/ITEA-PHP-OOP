<?php

interface DataStorageInterface
{
    public function create($key, $item);

    public function delete($key);
}

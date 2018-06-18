<?php

require_once __DIR__ . '/AbstractDataStorage.php';
require_once __DIR__ . '/ClearStorageInterface.php';
require_once __DIR__ . '/CompressorInterface.php';

class InMemoryDataStorage extends AbstractDataStorage implements ClearStorageInterface
{
    private $storage = [];
    private $compressor;

    public function __construct(CompressorInterface $compressor)
    {
        $this->compressor = $compressor;
    }

    public function create($key, $item)
    {
        $compressedData = $this->compressor->compress($item);
        $this->storage[$key] = $compressedData;
    }

    public function delete($key)
    {
        if (isset($this->storage[$key])) {
            unset($this->storage[$key]);
        }
    }

    public function get($key)
    {
        if (isset($this->storage[$key])) {
            $compressedData = $this->storage[$key];

            return $this->compressor->unCompress($compressedData);
        }

        return null;
    }

    public function clear()
    {
        $this->storage = [];
    }
}

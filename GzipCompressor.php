<?php

require __DIR__ . '/CompressorInterface.php';

class GzipCompressor implements CompressorInterface
{
    const COMPRESS_LEVEL = 5;

    public function compress($data)
    {
        return \gzencode($data, self::COMPRESS_LEVEL);
    }

    public function unCompress($data)
    {
        return \gzdecode($data);
    }
}

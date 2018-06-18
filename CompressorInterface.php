<?php

interface CompressorInterface
{
    public function compress($data);

    public function unCompress($data);
}

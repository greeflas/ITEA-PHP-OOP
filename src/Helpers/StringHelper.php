<?php

namespace App\Helpers;

use App\Traits\MacrableTrait;

class StringHelper
{
    use MacrableTrait;

    public static function length($str)
    {
        return \strlen($str);
    }
}

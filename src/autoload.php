<?php

\spl_autoload_register(function ($className) {
    // App\Helpers\StringHelper

    $parts = \explode('\\', $className);

    \array_shift($parts);
    $className = \array_pop($parts);

    $path = \implode(DIRECTORY_SEPARATOR, $parts);

    require \sprintf('%s/%s.php', $path, $className);
});

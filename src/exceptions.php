#!/usr/bin/env php
<?php

try {
    new InMemoryDataStorage();
} catch (\Throwable $e) {
    echo 'Class not found!';
}

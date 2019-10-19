<?php
declare(strict_types=1);

function requireFloat(float $value) {
    var_dump($value, gettype($value));
}

requireFloat(100);


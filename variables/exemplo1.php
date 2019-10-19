<?php

declare(strict_types=1);

$foo = 100;
var_dump($foo, gettype($foo));

$foo = false;
var_dump($foo, gettype($foo));

$foo = 1.1;
var_dump($foo, gettype($foo));

$foo = [];
var_dump($foo, gettype($foo));

$foo = "Oi Mãe, Tô No PHPeste :D";
var_dump($foo, gettype($foo));

$foo = "100";
var_dump($foo, gettype($foo));


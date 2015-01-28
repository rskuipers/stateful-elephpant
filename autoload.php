<?php

spl_autoload_register(function ($class) {
    $tokens = explode('\\', $class);
    $tokens[0] = 'src';
    require_once implode('/', $tokens) . '.php';
});
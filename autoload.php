<?php

spl_autoload_register(function ($class) {
    $tokens = explode('\\', $class);
    require_once 'src/' . implode('/', $tokens) . '.php';
});
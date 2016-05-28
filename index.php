<?php

require_once 'autoload.php';

$elephpant = new Elephpant();

echo 'Pressing RIGHT_DOWN' . PHP_EOL;
$elephpant->handle(Input::RIGHT_DOWN);

echo 'Pressing UP_DOWN' . PHP_EOL;
$elephpant->handle(Input::SPACE_DOWN);

echo 'Pressing SPACE_DOWN' . PHP_EOL;
$elephpant->handle(Input::SPACE_DOWN);

echo 'Pressing UP_UP' . PHP_EOL;
$elephpant->handle(Input::UP_UP);

echo 'Pressing SPACE_UP' . PHP_EOL;
$elephpant->handle(Input::SPACE_UP);
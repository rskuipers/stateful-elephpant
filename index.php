<?php

require_once 'autoload.php';

$elephpant = new Elephpant();

echo 'Pressing RIGHT_DOWN' . PHP_EOL;
$elephpant->handle(Input::RIGHT_DOWN);

echo 'Pressing SPACE_DOWN' . PHP_EOL;
$elephpant->handle(Input::SPACE_DOWN);

echo 'Pressing DOWN_DOWN' . PHP_EOL;
$elephpant->handle(Input::DOWN_DOWN);

echo 'Pressing SPACE_UP' . PHP_EOL;
$elephpant->handle(Input::SPACE_UP);

echo 'Pressing DOWN_DOWN' . PHP_EOL;
$elephpant->handle(Input::DOWN_DOWN);

echo 'Pressing SPACE_UP' . PHP_EOL;
$elephpant->handle(Input::SPACE_UP);
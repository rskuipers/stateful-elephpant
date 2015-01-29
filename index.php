<?php

require_once 'autoload.php';

$elephpant = new Elephpant();

$elephpant->handle(Input::RIGHT_DOWN);
$elephpant->handle(Input::SPACE_DOWN);

$elephpant->handle(Input::DOWN_DOWN);

$elephpant->handle(Input::SPACE_UP);
$elephpant->handle(Input::DOWN_DOWN);

$elephpant->handle(Input::SPACE_UP);
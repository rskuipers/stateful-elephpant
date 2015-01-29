<?php

require_once 'autoload.php';

$guy = new \StateGame\Elephpant();

$guy->handle(\StateGame\Input::RIGHT_DOWN);
$guy->handle(\StateGame\Input::SPACE_DOWN);

$guy->handle(\StateGame\Input::DOWN_DOWN);

$guy->handle(\StateGame\Input::SPACE_UP);
$guy->handle(\StateGame\Input::DOWN_DOWN);

$guy->handle(\StateGame\Input::SPACE_UP);
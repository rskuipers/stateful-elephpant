<?php

require_once 'autoload.php';

$guy = new \StateGame\Guy();

$guy->handle(\StateGame\Input::RIGHT_DOWN);
$guy->handle(\StateGame\Input::A_DOWN);

$guy->handle(\StateGame\Input::B_DOWN);

$guy->handle(\StateGame\Input::A_UP);
$guy->handle(\StateGame\Input::B_DOWN);

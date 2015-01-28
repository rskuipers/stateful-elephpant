<?php

namespace StateGame\State;

use StateGame\Guy;
use StateGame\Input;

class Idle implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Guy $guy, $input)
    {
        switch ($input) {
            case Input::RIGHT_DOWN:
            case Input::LEFT_DOWN:
                $guy->apply('run');
                break;
            case Input::A_DOWN:
                $guy->apply('jump');
                break;
            case Input::B_DOWN:
                $guy->apply('crouch');
                break;
        }
    }
}

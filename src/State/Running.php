<?php

namespace StateGame\State;

use StateGame\Guy;
use StateGame\Input;

class Running implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Guy $guy, $input)
    {
        switch ($input) {
            case Input::A_DOWN:
                $guy->apply('jump');
                break;
            case Input::B_DOWN:
                $guy->apply('crouch');
                break;
        }
    }
}

<?php

namespace StateGame\State;

use StateGame\Elephpant;
use StateGame\Input;

class Idle implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $Elephpant, $input)
    {
        switch ($input) {
            case Input::RIGHT_DOWN:
            case Input::LEFT_DOWN:
                $Elephpant->apply('run');
                break;
            case Input::A_DOWN:
                $Elephpant->apply('jump');
                break;
            case Input::B_DOWN:
                $Elephpant->apply('crouch');
                break;
        }
    }
}

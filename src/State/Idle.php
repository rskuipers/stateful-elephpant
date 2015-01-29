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
            case Input::SPACE_DOWN:
                $Elephpant->apply('jump');
                break;
            case Input::DOWN_DOWN:
                $Elephpant->apply('crouch');
                break;
        }
    }
}

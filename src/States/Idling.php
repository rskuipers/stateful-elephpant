<?php

namespace States;

use Elephpant;
use Input;

class Idling implements State
{
    /**
     * @param Elephpant $elephpant
     * @param string $input
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::RIGHT_DOWN:
            case Input::LEFT_DOWN:
                $elephpant->transitionTo(new Running());
                break;
            case Input::UP_DOWN:
                $elephpant->transitionTo(new Jumping());
                break;
            case Input::DOWN_DOWN:
                $elephpant->transitionTo(new Crouching());
                break;
            case Input::SPACE_UP:
                $elephpant->shoot();
                break;
        }
    }
}

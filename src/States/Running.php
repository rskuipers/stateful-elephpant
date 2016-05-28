<?php

namespace States;

use Elephpant;
use Input;

class Running implements State
{
    /**
     * @param Elephpant $elephpant
     * @param string $input
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::SPACE_DOWN:
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

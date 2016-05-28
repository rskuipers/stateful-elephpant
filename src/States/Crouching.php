<?php

namespace States;

use Elephpant;
use Input;

class Crouching implements State
{
    /**
     * @param Elephpant $elephpant
     * @param string $input
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::DOWN_UP:
                $elephpant->transitionTo(new Idling());
                break;
        }
    }
}

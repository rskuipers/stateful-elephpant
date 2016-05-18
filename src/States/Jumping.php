<?php

namespace States;

use Elephpant;
use Input;

class Jumping implements State
{
    /**
     * @param Elephpant $elephpant
     * @param string $input
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::SPACE_UP:
                $elephpant->transitionTo(new Running());
                break;
        }
    }
}

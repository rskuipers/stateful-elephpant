<?php

namespace StateGame\State;

use StateGame\Guy;
use StateGame\Input;

class Crouching implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Guy $guy, $input)
    {
        switch ($input) {
            case Input::B_UP:
                $guy->apply('idle');
                break;
        }
    }
}

<?php

namespace StateGame\State;

use StateGame\Guy;
use StateGame\Input;

class Jumping implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Guy $guy, $input)
    {
        switch ($input) {
            case Input::A_UP:
                $guy->apply('run');
                break;
        }
    }
}

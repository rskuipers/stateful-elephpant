<?php

namespace StateGame\State;

use StateGame\Elephpant;
use StateGame\Input;

class Jumping implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $Elephpant, $input)
    {
        switch ($input) {
            case Input::SPACE_UP:
                $Elephpant->apply('run');
                break;
        }
    }
}

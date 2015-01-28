<?php

namespace StateGame\State;

use StateGame\Elephpant;
use StateGame\Input;

class Crouching implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $Elephpant, $input)
    {
        switch ($input) {
            case Input::B_UP:
                $Elephpant->apply('idle');
                break;
            case Input::A_UP:
                $Elephpant->dump();
                break;
        }
    }
}

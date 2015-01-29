<?php

namespace State;

use Elephpant;
use Input;

class Crouching implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $Elephpant, $input)
    {
        switch ($input) {
            case Input::DOWN_UP:
                $Elephpant->apply('idle');
                break;
            case Input::SPACE_UP:
                $Elephpant->dump();
                break;
        }
    }
}

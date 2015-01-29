<?php

namespace State;

use Elephpant;
use Input;

class Running implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $Elephpant, $input)
    {
        switch ($input) {
            case Input::SPACE_DOWN:
                $Elephpant->apply('jump');
                break;
            case Input::DOWN_DOWN:
                $Elephpant->apply('crouch');
                break;
        }
    }
}

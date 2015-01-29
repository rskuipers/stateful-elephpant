<?php

namespace State;

use Elephpant;
use Input;

class Idling implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::RIGHT_DOWN:
            case Input::LEFT_DOWN:
                $elephpant->setState(new Running());
                break;
            case Input::SPACE_DOWN:
                $elephpant->setState(new Jumping());
                break;
            case Input::DOWN_DOWN:
                $elephpant->setState(new Crouching());
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'idling';
    }
}

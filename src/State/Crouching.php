<?php

namespace State;

use Elephpant;
use Input;

class Crouching implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::DOWN_UP:
                $elephpant->setState(new Idling());
                break;
            case Input::SPACE_UP:
                $elephpant->dump();
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'crouching';
    }
}

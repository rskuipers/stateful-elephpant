<?php

namespace State;

use Elephpant;
use Input;

class Jumping implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::SPACE_UP:
                $elephpant->setState(new Running());
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'jumping';
    }
}

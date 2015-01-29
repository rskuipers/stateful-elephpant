<?php

namespace State;

use Elephpant;
use Input;

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

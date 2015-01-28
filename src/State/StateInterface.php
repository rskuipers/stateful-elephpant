<?php

namespace StateGame\State;

use StateGame\Elephpant;

interface StateInterface
{
    /**
     * @param Elephpant $Elephpant
     * @param $input
     */
    public function handle(Elephpant $Elephpant, $input);
}
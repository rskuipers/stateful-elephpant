<?php

namespace State;

use Elephpant;

interface StateInterface
{
    /**
     * @param Elephpant $Elephpant
     * @param $input
     */
    public function handle(Elephpant $Elephpant, $input);
}
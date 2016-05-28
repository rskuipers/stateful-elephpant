<?php

namespace States;

use Elephpant;

interface State
{
    /**
     * @param Elephpant $elephpant
     * @param string $input
     */
    public function handle(Elephpant $elephpant, $input);
}

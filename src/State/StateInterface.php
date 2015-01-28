<?php

namespace StateGame\State;

use StateGame\Guy;

interface StateInterface
{
    /**
     * @param Guy $guy
     * @param $input
     */
    public function handle(Guy $guy, $input);
}
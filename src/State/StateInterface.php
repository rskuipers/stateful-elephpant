<?php

namespace State;

use Elephpant;

interface StateInterface
{
    /**
     * @param Elephpant $elephpant
     * @param $input
     */
    public function handle(Elephpant $elephpant, $input);

    /**
     * @return string
     */
    public function getName();
}
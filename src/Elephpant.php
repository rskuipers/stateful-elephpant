<?php

use States\Idling;
use States\State;

class Elephpant
{
    /**
     * @var State
     */
    public $state;

    public function __construct()
    {
        $this->transitionTo(new Idling());
    }

    /**
     * @param string $input
     */
    public function handle($input)
    {
        $this->state->handle($this, $input);
    }

    public function dump()
    {
        var_dump($this);
    }

    /**
     * @param State $state
     */
    public function transitionTo(State $state)
    {
        $this->state = $state;
        echo 'Applied ' . get_class($state) . PHP_EOL;
    }
}

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

    public function shoot()
    {
        echo self::class . ' shoots a fireball' . PHP_EOL;
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

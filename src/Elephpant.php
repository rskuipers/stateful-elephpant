<?php

use State\Idling;
use State\StateInterface;

class Elephpant
{
    /**
     * @var StateInterface
     */
    public $state;

    public function __construct()
    {
        $this->setState(new Idling());
    }

    /**
     * @param $input
     */
    public function handle($input)
    {
        echo "Handling {$input}\n";
        $this->state->handle($this, $input);
    }

    public function dump()
    {
        var_dump($this);
    }

    /**
     * @param $state
     */
    public function setState(StateInterface $state)
    {
        $this->state = $state;
        echo "Applied state {$state->getName()}\n";
    }
}

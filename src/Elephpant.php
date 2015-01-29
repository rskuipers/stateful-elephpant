<?php

use State\Crouching;
use State\Idle;
use State\Jumping;
use State\Running;
use State\StateInterface;

class Elephpant
{
    /**
     * @var StateInterface
     */
    public $state;

    public function __construct()
    {
        $this->apply('idle');
    }

    /**
     * @param $input
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
     * @param $transition
     */
    public function apply($transition)
    {
        switch ($transition) {
            case 'idle':
                $this->state = new Idle();
                break;
            case 'run':
                $this->state = new Running();
                break;
            case 'jump':
                $this->state = new Jumping();
                break;
            case 'crouch':
                $this->state = new Crouching();
                break;
        }
        echo "Applied transition {$transition}\n";
    }
}

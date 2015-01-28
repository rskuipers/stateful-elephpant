<?php

namespace StateGame;

use StateGame\State\Crouching;
use StateGame\State\Idle;
use StateGame\State\Jumping;
use StateGame\State\Running;
use StateGame\State\StateInterface;

class Guy
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

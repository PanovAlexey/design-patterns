<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States;

use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\GumballMachine;

class NoQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You inserted a quarter \n";

        $this->gumballMachine->setState(
            $this->gumballMachine->getHasQuarterState()
        );
    }

    public function ejectQuarter(): void
    {
        echo "You haven't inserted a quarter \n";
    }

    public function turnCrank(): void
    {
        echo "You turned, but there's no quarter \n";
    }

    public function dispense(): void
    {
        echo "You need to pay first \n";
    }

    public function __toString(): string
    {
        return 'Waiting for quarter';
    }
}
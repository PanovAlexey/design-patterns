<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States;

use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\GumballMachine;

class SoldState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "Please wait, we're already giving you a gumball \n";
    }

    public function ejectQuarter(): void
    {
        echo "Sorry, you already turned the crank \n";
    }

    public function turnCrank(): void
    {
        echo "Turning twice doesn't get you another gumball! \n";
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState(
                $this->gumballMachine->getNoQuarterState()
            );
        } else {
            echo "Oops, out of gumballs now! \n";

            $this->gumballMachine->setState(
                $this->gumballMachine->getSoldOutState()
            );
        }
    }

    public function __toString(): string
    {
        return "dispensing a gumball";
    }
}
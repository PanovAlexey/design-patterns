<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States;

use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\GumballMachine;

class HasQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You can't insert another quarter \n";
    }

    public function ejectQuarter(): void
    {
        echo "Quarter returned \n";

        $this->gumballMachine->setState(
            $this->gumballMachine->getNoQuarterState()
        );
    }

    public function turnCrank(): void
    {
        echo "You turned... \n";
        $winner = rand(0, 9);

        if (($winner == 0) && ($this->gumballMachine->getCount() > 1)) {
            $this->gumballMachine->setState(
                $this->gumballMachine->getWinnerState()
            );
        } else {
            $this->gumballMachine->setState(
                $this->gumballMachine->getSoldState()
            );
        }
    }

    public function dispense(): void
    {
        echo "No gumball dispensed \n";
    }

    public function __toString(): string
    {
        return 'waiting for turn of crank';
    }
}
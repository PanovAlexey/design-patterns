<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States;

use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\GumballMachine;

class WinnerState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "Please wait, we're already giving you a Gumball \n";
    }

    public function ejectQuarter(): void
    {
        echo "Please wait, we're already giving you a Gumball \n";
    }

    public function turnCrank(): void
    {
        echo "Turning again doesn't get you another gumball! \n";
    }

    public function dispense(): void
    {
        echo "YOU'RE A WINNER! You get two gumballs for your quarter \n";

        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() == 0) {
            echo("Oops, out of gumballs! \n");

            $this->gumballMachine->setState(
                $this->gumballMachine->getSoldOutState()
            );
        } else {
            $this->gumballMachine->releaseBall();

            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState(
                    $this->gumballMachine->getNoQuarterState()
                );
            } else {
                echo("Oops, out of gumballs! \n");

                $this->gumballMachine->setState(
                    $this->gumballMachine->getSoldOutState()
                );
            }
        }
    }

    public function __toString(): string
    {
        return "dispensing two gumballs for your quarter, because YOU'RE A WINNER!";
    }
}
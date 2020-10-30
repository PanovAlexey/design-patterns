<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States;

use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\GumballMachine;

class SoldOutState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You can't insert a quarter, the machine is sold out \n";
    }

    public function ejectQuarter(): void
    {
        echo "You can't eject, you haven't inserted a quarter yet \n";
    }

    public function turnCrank(): void
    {
        echo "You turned, but there are no gumballs \n";
    }

    public function dispense(): void
    {
        echo "No gumball dispensed \n";
    }

    public function __toString(): string
    {
        return "sold out";
    }
}
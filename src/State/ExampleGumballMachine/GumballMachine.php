<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine;

use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States\NoQuarterState;
use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States\SoldState;
use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States\State;
use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States\SoldOutState;
use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States\HasQuarterState;
use CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States\WinnerState;

class GumballMachine
{
    private State $soldOutState;
    private State $noQuarterState;
    private State $hasQuarterState;
    private State $soldState;
    private State $winnerState;

    private State $state;

    private int $count = 0;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->state = $this->noQuarterState;
        $this->count = $numberGumballs;

        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }

    public function releaseBall(): void
    {
        echo "A gumball comes rolling out the slot... \n";

        if ($this->count != 0) {
            $this->count = $this->count - 1;
        }
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function __toString(): string
    {
        $result = "\nMighty Gumball, Inc.";
        $result .= "\nJava-enabled Standing Gumball Model #2004";
        $result .= "\nInventory: " . $this->count . ' gumball';

        if ($this->count != 1) {
            $result .= 's';
        }

        $result .= "\n";
        $result .= 'Machine is ' . $this->state . "\n";

        return $result;
    }

    private function refill(int $count): void
    {
        $this->count = $count;

        if ($count > 0) {
            $this->state = $this->noQuarterState;
        }
    }
}
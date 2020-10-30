<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine\States;

interface State
{
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
    public function __toString();
}
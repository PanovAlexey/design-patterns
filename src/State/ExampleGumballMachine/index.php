<?php

namespace CodeblogPro\DesignPatterns\State\ExampleGumballMachine;

require_once '../../../vendor/autoload.php';

$gumballMachine = new GumballMachine(5);
echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo $gumballMachine;
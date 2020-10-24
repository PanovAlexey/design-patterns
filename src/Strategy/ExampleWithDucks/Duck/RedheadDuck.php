<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\Duck;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior\FlyWithWings;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior\Quack;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuackBehavior(new Quack());
    }

    public function display()
    {
        echo "I'm a real domesticated redhead duck. \n";
    }
}
<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\Duck;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior\FlyNoWay;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior\Squeak;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Squeak());
    }

    public function display()
    {
        echo "I'm just bait duck. \n";
    }
}
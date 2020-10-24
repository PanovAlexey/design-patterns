<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\Duck;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior\FlyNoWay;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior\MuteQuack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new MuteQuack());
    }

    public function display()
    {
        echo "I'm a model duck. \n";
    }
}
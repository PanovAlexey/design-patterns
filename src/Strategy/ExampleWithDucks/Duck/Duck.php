<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\Duck;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior\FlyBehavior;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior\QuackBehavior;

abstract class Duck
{
    private FlyBehavior $flyBehavior;
    private QuackBehavior $quackBehavior;

    public abstract function display();

    public function __construct()
    {
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function swim()
    {
        echo "All ducks float, even decoys :-) \n";
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}
<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack() {
        echo "Quack! \n";
    }
}
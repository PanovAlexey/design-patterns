<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack() {
        echo "Squeak! \n";
    }
}
<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack() {
        echo "<< Silence >>! \n";
    }
}
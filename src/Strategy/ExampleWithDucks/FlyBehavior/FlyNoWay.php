<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly() {
        echo "I can't fly! \n";
    }
}
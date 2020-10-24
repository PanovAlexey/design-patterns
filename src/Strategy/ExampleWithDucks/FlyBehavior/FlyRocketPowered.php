<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly() {
        echo "I am flying with a rocket! \n";
    }
}
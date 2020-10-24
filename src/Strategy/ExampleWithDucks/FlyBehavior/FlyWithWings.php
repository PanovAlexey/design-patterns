<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly() {
        echo "I am flying by my wings! \n";
    }
}
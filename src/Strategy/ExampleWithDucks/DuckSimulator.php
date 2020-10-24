<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\Duck\MallardDuck;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithDucks\FlyBehavior\FlyRocketPowered;

class DuckSimulator
{
    public static function MallardDuckSimulate() {
        $mallardDuck = new MallardDuck();

        echo "How it flies: \n";

        /**
         * Calling the performQuack method inherited by the MallardDuck class.
         * This method delegates the execution of an operation by reference to
         * QuackBehavior (it calls quack() via the inherited quackBehavior variable).
         */
        $mallardDuck->performFly();

        echo "How it quacking: \n";

        // The performQuack() method works by analogy.
        $mallardDuck->performQuack();

        /**
         * Demonstration of the possibility of changing the algorithm
         * dynamically during execution
         */
        $mallardDuck->setFlyBehavior(new FlyRocketPowered());
        echo "How it flies (after dynamic replacement of the flight algorithm): \n";
        $mallardDuck->performFly();
    }
}
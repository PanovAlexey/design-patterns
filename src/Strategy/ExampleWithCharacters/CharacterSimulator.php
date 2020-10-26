<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Character\King;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\AxeBehavior;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\BowAndArrowBehavior;
use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\KnifeBehavior;

class CharacterSimulator
{
    public static function KingSimulate() {
        $king = new King();

        echo "How king fights: \n";
        $king->fight();

        echo "The king picked up the knife and struck with it: \n";
        $king->setWeapon(new KnifeBehavior());
        $king->fight();

        echo "The king picked up the axe and struck with it: \n";
        $king->setWeapon(new AxeBehavior());
        $king->fight();

        echo "The king took out his bow, took an arrow and fired: \n";
        $king->setWeapon(new BowAndArrowBehavior());
        $king->fight();
    }
}
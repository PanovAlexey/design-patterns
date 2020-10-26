<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Character;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\BowAndArrowBehavior;

class Knight extends Character
{
    public function __construct()
    {
        $this->setWeapon(new BowAndArrowBehavior());
    }
}
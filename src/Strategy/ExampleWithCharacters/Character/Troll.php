<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Character;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\AxeBehavior;

class Troll extends Character
{
    public function __construct()
    {
        $this->setWeapon(new AxeBehavior());
    }
}
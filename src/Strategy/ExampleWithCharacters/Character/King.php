<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Character;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\SwordBehavior;

class King extends Character
{
    public function __construct()
    {
        $this->setWeapon(new SwordBehavior());
    }
}
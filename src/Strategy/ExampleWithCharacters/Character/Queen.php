<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Character;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\KnifeBehavior;

class Queen extends Character
{
    public function __construct()
    {
        $this->setWeapon(new KnifeBehavior());
    }
}
<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Character;

use CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon\WeaponBehavior;

abstract class Character
{
    private WeaponBehavior $weaponBehavior;

    public function fight() {
        $this->weaponBehavior->useWeapon();
    }

    public function setWeapon(WeaponBehavior $weaponBehavior)
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}
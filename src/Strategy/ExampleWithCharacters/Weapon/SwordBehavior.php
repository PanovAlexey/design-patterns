<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "The sound of the sword clang. \n";
    }
}
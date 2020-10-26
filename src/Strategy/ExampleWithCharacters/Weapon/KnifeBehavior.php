<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "Rustling knife. \n";
    }
}
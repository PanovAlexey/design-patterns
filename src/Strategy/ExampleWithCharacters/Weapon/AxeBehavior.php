<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo "Ax chopping sound. \n";
    }
}
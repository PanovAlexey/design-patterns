<?php

namespace CodeblogPro\DesignPatterns\Strategy\ExampleWithCharacters\Weapon;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'The sound of the bowstring pulling and the whistle of a flying '
            . "arrow. \n";
    }
}
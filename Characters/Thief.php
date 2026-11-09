<?php

class Thief extends AbstractCharacter
{
    public function backstab():int
    {
        return random_int(0,6);
    }

    public function attack(AbstractCharacter $target):void{
        $damage = $this->getWeapon()->hit();

        $damage += $this->backstab();

        $target->takeDamage($damage);
    }
}
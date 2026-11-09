<?php

class Bow implements Weapon
{
    private int $damage;
    private int $range;

    public function __construct(int $newDamage, int $newRange){
        $this->damage = $newDamage;
        $this->range = $newRange;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    /**
     * @return int
     */
    public function getRange(): int
    {
        return $this->range;
    }

    /**
     * @param int $range
     */
    public function setRange(int $range): void
    {
        $this->range = $range;
    }

    public function hit():int{
        //1. Affichage du message
        echo("Une flèche vole jusqu'a $this->range mètres");

        //2. Retourner les dégâts
        return $this->damage;
    }
}
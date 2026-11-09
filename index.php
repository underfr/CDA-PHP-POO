<?php
//Exécuteur du jeu

//importer mes ressources
include './Characters/AbstractCharacter.php';
include './Interfaces/Weapon.php';
include './Characters/Warrior.php';
include './Characters/Thief.php';
include './Weapons/Sword.php';
include './Weapons/Bow.php';

//Instancier deux guerriers 
//$guts = new Warrior(50, "Guts", 100, new Sword(30));
//$griffith = new Warrior(70, "Griffith",50, new Sword(20));

//Faire que $guts attaque $griffith
//$guts->attack($griffith);

$rogue = new Thief("Valeera", 80, new Bow(10, 5));
$warrior = new Warrior(55, "Garrosh", 120, new Sword(20));

$bow = new Bow(random_int(15,25), 5);
$sword = new Sword(random_int(15,25));
$weapons = [$bow,$sword];

while ($rogue->getHealth() > 0 || $warrior->getHealth() > 0) {
    if ($rogue->getHealth() <= 0){
        echo $warrior->getName() . " a gagné";
        return;
    }
    if ($warrior->getHealth() <= 0){
        echo $rogue->getName() . " a gagné";
        return;
    }
    $rogue->attack($warrior);
    $warrior->attack($rogue);
    $rogue->setWeapon($weapons[random_int(0,count($weapons)-1)]);
    $warrior->setWeapon($weapons[random_int(0,count($weapons)-1)]);
}


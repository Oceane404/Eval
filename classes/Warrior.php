<?php

class Warrior extends Character {

    public function __construct($pseudo) {
        parent:: __construct($pseudo);
        $this->pseudo = $pseudo;
    }
   
    public function action($target) {
        $rand = rand(1, 10);
        $damage = $this->atk + $rand;
        
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo attaque $target->pseudo qui a $target->lifePoint points de vie!";
        
        return $status;

        $target->setlifePoint($this->damage);
        if($target->lifePoint<=0)
        {
            $target->lifepoint=0;
            return "$this->name attaque $target->name et $target->name est KO !";
        };
        return "$this->name attaque $target->name et il lui reste $this->lifePoint points de vie";

    }


    public function setHP($damage) {
        $this->lifePoint -= $damage;
        if ($this->lifePoint<=0);
        return;
    }
}